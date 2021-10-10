<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;
use App\Services\RoleService;
use App\Models\Role;
use App\Models\Privileg;
use App\Helpers\UtilHelper;
use Auth;
use App\Traits\Roles;

class RoleController extends AdminController
{

  use Roles;

    public function __construct(RoleService $roleService)
    {
        $this->roleServ = $roleService;

        $this->share([
          'page' => Role::PAGE,
          'recordsCount' => Role::count(),
        ]);

    }

    public function setCurrentRole(Request $request)
    {

      $request->validate([
        'id' => 'required|integer',
      ] ,[] ,[ 'id' => __('role.title') ]);

      $this->_setCurrentRole($request->id);
      return back();

    }

    public function index()
    {
        $data = role::all();
        return view('admin.roles.index',compact('data'));
    }

    public function create()
    {
        $privileges = Privileg::ForAll(0)->Active(1)->orderBy('sort')->get();
        $privilegesTree = UtilHelper::buildTreeRoot($privileges);

        return view('admin.roles.create',compact('privilegesTree'));
    }

    public function store(Request $request)
    {

        $title = UtilHelper::formatNormal($request->title);
        $request->merge([ 'title' => $title ]);

        $validate = $request->validate([
            'title' => 'required|unique:roles|max:50|string',
            'privileges_ids.*' => 'integer|exists:privileges,id',
        ]);


        if(empty($request->privileges_ids)) {
          return back()->withinput()->withErrors(['privileges_ids' => __('role.select_privileges') ]);
        }

        $privileges = Privileg::wherein('id',$request->privileges_ids)->whereNotNull('route')->get();
        if ($privileges->isEmpty()) {
          return back()->withinput()->withErrors(['privileges' => __('role.select_privileges') ]);
        }

        $all_routes = null;

        $privileges_routes = $privileges->pluck('routes')->toArray();
        foreach ($privileges_routes as $route) {
          if ($all_routes) {
              $all_routes = $all_routes .','.$route;
          } else {
            $all_routes = $route;
          }
        }

        $privileges_forAll_routes = Privileg::ForAll(1)->pluck('routes')->toArray();
        foreach ($privileges_forAll_routes as $route) {
          if ($all_routes) {
              $all_routes = $all_routes .','.$route;
          } else {
            $all_routes = $route;
          }
        }

        $all_routes = explode(',',$all_routes);

        $menu_1 = Privileg::wherein('id',$request->privileges_ids)->where('is_link',1)->pluck('id');

        $role = new Role();
        $role->title = $request->title;
        $role->privileges = $all_routes;
        $role->privileges_ids = $request->privileges_ids;
        $role->menu_1 = $menu_1;
        $role->role_for = !$request->role_for ? 0 : 1; // 1 selected (shop), 0 notSelected (admin)
        $role->access_user_id = Auth::id();
        $role->ip = UtilHelper::getUserIp();
        $role->save();

        if (!$role) {
          return back()->withinput()->withErrors(['general' => __('messages.added_faild') ]);
        }

        return redirect(route('admin.roles.index'));

    }

    public function edit(Request $request)
    {

      $privileges = Privileg::ForAll(0)->Active(1)->orderBy('sort')->get();
      $privilegesTree = UtilHelper::buildTreeRoot($privileges);

      $role = Role::where('id', $request->id)->firstorfail();

      $rolePrivileges = $role->privileges_ids;


      return view('admin.roles.edit',compact(['role','privilegesTree','rolePrivileges']));

    }

    public function update(Request $request)
    {

      $role = Role::where('id', $request->id)->firstorfail();

      $title = UtilHelper::formatNormal($request->title);
      $request->merge([ 'title' => $title ]);

      $validate = $request->validate([
          'title' => 'required|max:50|string|unique:roles,title,'.$request->id,
          'privileges_ids.*' => 'integer|exists:privileges,id',
      ]);

      if(empty($request->privileges_ids)) {
        return back()->withinput()->withErrors(['privileges' => __('role.select_privileges') ]);
      }

      $privileges = Privileg::wherein('id',$request->privileges_ids)->whereNotNull('route')->get();
      if ($privileges->isEmpty()) {
        return back()->withinput()->withErrors(['privileges' => __('role.select_privileges') ]);
      }

      $all_routes = null;

      $privileges_routes = $privileges->pluck('routes')->toArray();
      foreach ($privileges_routes as $route) {
        if ($all_routes) {
            $all_routes = $all_routes .','.$route;
        } else {
          $all_routes = $route;
        }
      }

      $privileges_forAll_routes = Privileg::ForAll(1)->pluck('routes')->toArray();
      foreach ($privileges_forAll_routes as $route) {
        if ($all_routes) {
            $all_routes = $all_routes .','.$route;
        } else {
          $all_routes = $route;
        }
      }

      $all_routes = explode(',',$all_routes);

      $menu_1 = Privileg::wherein('id',$request->privileges_ids)->where('is_link',1)->pluck('id');

      $role->title = $request->title;
      $role->privileges = $all_routes;
      $role->privileges_ids = $request->privileges_ids;
      $role->menu_1 = $menu_1;
      $role->role_for = !$request->role_for ? 0 : 1; // 1 selected (shop), 0 notSelected (admin)
      $role->access_user_id = Auth::id();
      $role->ip = UtilHelper::getUserIp();
      $role->save();

      return redirect(route('admin.roles.index'));

    }


}
