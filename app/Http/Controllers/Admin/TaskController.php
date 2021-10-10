<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use App\Models\Task;
use App\Models\Employee;
use App\Models\OurApp;
use App\Models\PriorityLevel;

use App\Services\TaskService;
use App\Http\Requests\TaskRequest;

use Auth;
// use App\Helpers\UtilHelper;

class TaskController extends AdminController
{

    // use FileUpload;
    private $taskServ;
    private $defaultLanguage;
    private $currentLanguage;

    public function __construct( TaskService $taskService, Request $request)
    {
          $this->taskServ = $taskService;
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
        $tasks = Task::with(['ourapp','employees','priority_level','status','statusTask'])->get();

        $this->share([ 'recordsCount' => count($tasks) ]);
        return view('admin.tasks.index' , compact(['tasks']) );
    }

    public function create()
    {

        $employees = Employee::all();
        $ourApps = OurApp::all();
        $priorityLevels = PriorityLevel::all();

        return view('admin.tasks.create' , compact(['employees','ourApps','priorityLevels']) );

    }

    public function store(TaskRequest $request)
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
