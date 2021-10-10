<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\View;
use Auth;

class AdminShares
{

	public function handle($request, Closure $next)
	{

		$settingService = new \App\Services\SettingService;
		$settings = $settingService->getSettingByProperties(['logo','app_title','phone_1','mail','back_ground']);
		$settings['logo'] = asset('storage/app/'.$settings['logo']);
		$settings['back_ground'] = asset('storage/app/'.$settings['back_ground']);
		View::share('settings', $settings );

		View::share('languages', \App\Models\language::all());
		View::share('activeLanguages', \App\Models\language::active()->get());

		// $contactUsService = new \App\Services\ContactUsService;
		View::share('unreadMessages', [] );


		return $next($request);
	}
}
