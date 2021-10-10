<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
// use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Str;

use App\Http\Controllers\AdminController;
use App\Helpers\UtilHelper;
use App\Traits\FileUpload;
use App\User;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\UserType;
use App\Services\UserService;
use App\Services\UserTypeService;
use App\Services\RoleService;
use Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends AdminController
{

  use FileUpload;
  private $userServ;
  private $userTypeServ;
  private $roleServ;
  private $defaultLanguage;

    public function __construct( UserService $userService, UserTypeService $userTypeService, RoleService $roleService ,Request $request )
    {
        $this->userServ = $userService;
        $this->userTypeServ = $userTypeService;
        $this->roleServ = $roleService;

        $this->getBreadcrumb();

        $this->defaultLanguage = $this->defaultLanguage();

        $this->middleware(function ($request, $next) {
          $this->currentLanguage = $request->current_language ?? app('currentLanguage'); // $currentPage from set locale
          return $next($request);
        });


        if ( Str::contains( $request->route()->getName(), 'admin.users') ){
          $this->currentType = UserType::USER;
        }

    }

    public function indexUser()
    {

        $currentType = $this->currentType;
        $data = User::where('user_type_id',$currentType)->notDeleted()->get();
        $this->share([ 'recordsCount' => count($data) ]);

        return view('admin.clients.users.index' , compact('data') );
    }

    public function setUserStatus(Request $request)
    {

        $user = User::findorfail($request->route()->id);

        $status = !$user->is_active;

        $this->userServ->setStatus( $user, $status );
        
        if ($request->ajax()) {
          return response()->json(['status'=>'success', 'msg'=>__('messages.updated'), 'alert'=>'swal' ]);
        }
        $this->flashAlert([ 'success' => ['msg'=> __('messages.updated') ] ]);
        return back();

    }

    public function deleteUser(Request $request)
    {
      $ids = [] ;
      if ($request->ids) {
          $ids = explode(",", $request->ids);
      }

      $delete = $this->userServ->deleteUser($ids);
      if ( $delete !== true ) {
        if ( $request->expectsJson() ) {
          return response()->json(['error' => $delete ]);
        } else {
          return redirect()->back()->withErrors([ $delete ]);
        }
      }

      $this->flashAlert([ 'success' => ['msg'=> __('messages.deleted') ] ]);

      if ( $request->expectsJson() ) {
        return response()->json(['success' =>  __('messages.deleted') ]);
      } else {
        return redirect()->back();
      }
    }


}
