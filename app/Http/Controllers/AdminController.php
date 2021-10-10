<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
  public function share( $data = [])
  {
    if (isset($data['recordsCount'])){
      View::share('recordsCount', !empty($data['recordsCount']) ? 'العدد ' . ':' . $data['recordsCount'] : '0'  ) ;
      return;
    }
    View::share( $data[0] , $data[1] ) ;
  }

  public function getBreadcrumb()
  {
      $breadcrumb = [];
      $currentPage = \App\Models\Privileg::where('routes','like', '%'.request()->route()->getName().','.'%' )->first();
      if ($currentPage) {
        $breadcrumb = \App\Helpers\UtilHelper::getParents('privileges',$currentPage->parent_id) + [ $currentPage->id => $currentPage ];
      }
      View::share('breadcrumb', $breadcrumb) ;
  }

  public function defaultLanguage()
  {

    $defaultLanguage = \App\Helpers\CommonHelper::getDefultLanguage();
    if (! $defaultLanguage) {
      abort(404, __('language.not_found'));
    }
    View::share('defaultLanguage',$defaultLanguage);
    return $defaultLanguage;

  }

  public function flashAlert( $flashAlerts = [] )
  {
    session()->flash('flashAlerts',$flashAlerts);
  }


}
