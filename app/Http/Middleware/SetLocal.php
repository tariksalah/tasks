<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\URL;
use App\Models\Language;
use CommonHelper;
// use Illuminate\Support\Facades\View;

class SetLocal
{

	public function handle($request, Closure $next)
	{

		if (! $request->locale) {
			// get default Language
			$defaultLocale = CommonHelper::getDefultLanguage();
			if (! $defaultLocale) {
				abort(404, __('language.not_found'));
			}
			app()->setLocale($defaultLocale->locale);
			URL::defaults(['locale' => $defaultLocale->locale]);
			app()->singleton('currentLocale' , function() use($defaultLocale){
				return $defaultLocale;
			});

			return redirect( route(request()->route()->getName()) );
		} else {
			// search language
			$locale = Language::where('locale', strip_tags($request->locale))->active()->first();
			if ( $locale ) {
				// if found
				app()->setLocale($locale->locale);
				URL::defaults(['locale' => $locale->locale]);
				app()->singleton('currentLocale' , function() use($locale){
					return $locale;
				});
			} else {
				// if not founded get default language
				$defaultLocale = CommonHelper::getDefultLanguage();
				if (! $defaultLocale) {
					abort(404, __('language.not_found'));
				}
				app()->setLocale($defaultLocale->locale);
				URL::defaults(['locale' => $defaultLocale->locale]);
				app()->singleton('currentLocale' , function() use($defaultLocale){
					return $defaultLocale;
				});

				if ($request->locale == 'login') { // to dont show message (unauthorized) at the biginng
					return redirect( route('admin.login') );
				}
				return redirect( route(request()->route()->getName()) );
			}
		}
		return $next($request);

	}
}
