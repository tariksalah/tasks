<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File as Ffile;

use App\User;
use App\Models\Admin;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\File;

use App\Services\AdminService;
use App\Services\UserService;

use App\Http\Requests\AdminRequest;

use App\Traits\FileUpload;
use Auth;
use App\Helpers\UtilHelper;

class AdminUserController extends AdminController
{

    use FileUpload;
    private $userServ;
    private $adminServ;
    private $defaultLanguage;
    private $currentLanguage;
    private $currentType;
    private $currentTypeAlias;

    public function __construct( AdminService $adminService, UserService $userService, Request $request)
    {
        $this->adminServ = $adminService;
        $this->userServ = $userService;


        $this->getBreadcrumb();

        $this->defaultLanguage = $this->defaultLanguage();

        $this->middleware(function ($request, $next) {
          $this->currentLanguage = $request->current_language ?? app('currentLocale')->locale; // currentLanguage from set locale
          $this->share([ 'currentLanguage' , $this->currentLanguage]);
          return $next($request);
        });

    }

    public function index()
    {
        // $language = $this->currentLanguage;
        $data = Admin::with('user.roles')->get();
        $this->share([ 'recordsCount' => count($data) ]);
        return view('admin.admins.index' , compact('data') );
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.admins.create',compact('roles'));
    }

    public function store(AdminRequest $request)
    {

        $this->adminServ->checkUniqueUserTitle( $request->validated()['name'] );

        $this->userServ->checkUniqueUserMobile( $request->validated()['mobile'] );
        $this->userServ->checkUniqueUserEmail( $request->validated()['email'] );

        $stored = Admin::create([
            'title' => $request->validated()['name'],
            'ip' => UtilHelper::getUserIp(),
            'access_user_id' => Auth::id(),
        ]);


        // store user
        $userData = $this->userServ->fields( $request->validated() );
        $user = new User($userData);
        $user = $stored->user()->save($user);

        $user->roles()->attach( $request->role );

        // save image
        if( $request->hasFile('image') ) {
              $path = $this->storeFile( $request , [
                    'fileUpload' => 'image' ,'folder' => Admin::FOLDER, 'recordId' => $user->id,
              ]);
              if (! $path) {
                $this->flashAlert([ 'faild' => ['msg'=> __('messages.error_upload_image' , [ 'var' => __('words.image')] ) ] ]);
                return redirect()->back();
              }
              $user->image = $path;
              $user->save();
        }

        // success
        $this->flashAlert([ 'success' => ['msg'=> __('messages.added')] ]);
        return redirect()->route('admin.admins.index');

    }

    public function edit(Request $request)
    {

        $data = Admin::with('user.roles')->findorfail($request->id);
        $roles = Role::all();

        return view('admin.admins.edit',compact(['data','roles']));
    }

    public function update(AdminRequest $request)
    {

        $admin = Admin::findorfail($request->id);
        $user = $admin->user;

        $this->adminServ->checkUniqueUserTitle( $request->validated()['name'] , $admin->id );

        $this->userServ->checkUniqueUserMobile( $request->validated()['mobile'] , $user->id );
        $this->userServ->checkUniqueUserEmail( $request->validated()['email'] , $user->id);


        $updated = $admin->update([
          'title' => $request->validated()['name'],
          'ip' => UtilHelper::getUserIp(),
          'access_user_id' => Auth::id()
        ]);

        $updatedUser = $this->userServ->update($user, array_merge( $request->validated() , [ 'access_user_id' => Auth::id() ] ));


        // save image
        if ($request->image_remove) {
          Ffile::delete('storage/app/'.$user->image);
          $updatedUser->image = null;
          $updatedUser->save();
        }
        if( $request->hasFile('image') ) {
              Ffile::delete('storage/app/'.$user->image);
              $path = $this->storeFile( $request , [
                    'fileUpload' => 'image' ,'folder' => Admin::FOLDER, 'recordId' => $updatedUser->id,
              ]);
              if (! $path) {
                $this->flashAlert([ 'faild' => ['msg'=> __('messages.error_upload_image' , [ 'var' => __('words.image')] ) ] ]);
                return redirect()->back();
              }
              $updatedUser->image = $path;
              $updatedUser->save();
        }

              // success
        $this->flashAlert([ 'success' => ['msg'=> __('messages.updated')] ]);
        return redirect()->route('admin.admins.index');

    }

    public function setStatus(Request $request)
    {

        $admin = Admin::findorfail($request->route()->id);
        $user = $admin->user;

        $status = !$admin->is_active;

        $validate = $this->userServ->validateActiveStatus($status);
        if ($validate == false) {
          if ($request->ajax()) {
            return response()->json(['status'=>'error', 'msg'=>__('auth.last_active_admin'), 'alert'=>'swal' ]);
          }
          $this->flashAlert([ 'faild' => ['msg'=> __('auth.last_active_admin')] ]);
          return back();
        }

        $this->adminServ->setStatus( $admin, $status );
        $this->userServ->setStatus( $user, $status );


        if ($request->ajax()) {
          return response()->json(['status'=>'success', 'msg'=>__('messages.updated'), 'alert'=>'swal' ]);
        }
        $this->flashAlert([ 'success' => ['msg'=> __('messages.updated') ] ]);
        return back();

    }

    public function destroy(Request $request)
    {
        $ids = [] ;
        if ($request->ids) {
            $ids = explode(",", $request->ids);
        }

        $delete = $this->adminServ->delete($ids);
        User::inAny($ids)->ForAdmin()->delete();


        $this->flashAlert([ 'success' => ['msg'=> __('messages.deleted') ] ]);

        if ( $request->expectsJson() ) {
          return response()->json(['success' =>  __('messages.deleted') ]);
        } else {
          return redirect()->back();
        }

    }

    public function destroyCustomer(Request $request)
    {
        $ids = [] ;
        if ($request->ids) {
            $ids = explode(",", $request->ids);
        }

        $delete = $this->adminServ->delete($ids);
        User::inAny($ids)->ForCustomer()->delete();


        $this->flashAlert([ 'success' => ['msg'=> __('messages.deleted') ] ]);

        if ( $request->expectsJson() ) {
            return response()->json(['success' =>  __('messages.deleted') ]);
        } else {
            return redirect()->back();
        }

    }


}
