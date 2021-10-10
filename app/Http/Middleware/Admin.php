<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\View;
use App\Traits\Roles;
use App\Helpers\DateHelper;

class Admin
{
    use Roles;

    public function handle($request, Closure $next)
    {


        // Chek if User loged in
        if (! auth()->check()) {
          if ( $request->expectsJson() ) {
            return response()->json( ['response'=> ['error' => trans('auth.unauthenticated')]], 401 );
          } else {
            return redirect()->route('admin.login')->withErrors([trans('auth.unauthenticated')]);
          }
        }


        // Check if User Active
        if( auth()->user()->is_active  == 0 || auth()->user()->is_active_admin == 0 ) {
          if ( $request->expectsJson() ) {
            auth()->logout();
            return response()->json( ['response'=> ['error' => trans('auth.in_active')]], 401 );
          } else {
            auth()->logout();
            return redirect()->route('admin.login')->withErrors([trans('auth.in_active')]);
          }
        }


        // Check if User Verified
        if (auth()->user()->isVerified(0)){
          $verificationServ = new \App\Services\VerificationService();
          $verificationServ->createVerification(auth()->id());
          return redirect()->route('admin.verifications.show');
        }


        // get current rol or set default . set it in auth()->user()->currentRole and share it to all views
        // auth()->user()->currentRole
        $this->_getCurrentRole();


        // check privilege
        $userRole = auth()->user()->currentRole;
        $hasPrivilege = $userRole->hasPrivilege(request()->route()->getName());
        if ( $hasPrivilege == false) {
          // if in any page of admin (like roles) and cahnged account to supervisore then the currnt page is roles which is not in supervisor roles
          session()->flash('flashAlerts',[ 'faild' => ['msg'=> __('auth.unauthorized')  ] ]);
          return redirect()->route('admin.home');
          // auth()->logout();
          // return redirect()->route('front.login')->withErrors([trans('auth.unauthorized')]);
        }

        // share menu_1
        $menu_1 = \App\Models\Privileg::wherein('id',$userRole->menu_1)->Active(1)->select('id','title','parent_id','route','route_parameters','privileg')->orderBy('sort')->get();
        $menu_1 = \App\Helpers\UtilHelper::buildTree($menu_1);
        View::share( 'menu_1', $menu_1 );


        // share user roles for user roles menu
        app()->singleton('userRoles' , function() {
          return auth()->user()->roles()->get();
        });


        // share current Date
        $current_date = date("Y-m-d");
        $currentDate['date'] = $current_date ;
        $currentDate['dateDay'] = __('dates.'.date('D', strtotime( $current_date )));
        $date = DateHelper::GregorianToHijri( strtotime($current_date) );
        $currentDate['dateHijri'] =  DateHelper::DateToShowHijri($date);

        app()->singleton('currentDate' , function() use($currentDate) {
          return $currentDate;
        });


        return $next($request);


    }
}
