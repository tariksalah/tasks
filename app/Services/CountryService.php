<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Helpers\UtilHelper;
use App\Traits\Cachement;
use App\Models\Country;
use App\Models\CountryInfo;
use Auth;

class CountryService
{
  use Cachement;

    public function queryAll( $params = [] , $language = null)
    {

        $language = $language ?? app()->getLocale();

        $is_active = isset( $params['is_active'] ) ? $params['is_active'] : null;

        $data = DB::Table('countries')
        ->leftjoin('country_info', function ($join) use($language) {
            $join->on('countries.id','country_info.country_id')->where('country_info.language', $language);
        })
        ->select('countries.id','countries.parent_id','countries.is_active','countries.title_general','country_info.title','country_info.language')
        ->orderBy('country_info.title');

        $data->when( $is_active , function ($q) use($is_active){
            return $q->where('countries.is_active',$is_active);
        });

        $data = $data->get();
        return $data;

    }

    public function getAll($language = null)
    {
        // $this->cacheFlush();

        $language = $language ?? app()->getLocale();
        // $cacheName = 'countries'.'-'.$language ;
        //
        // if ( $this->cacheHas($cacheName) ) {
        //   return $this->cacheGet($cacheName);
        // }

        $data = $this->queryAll([],$language);
        // $this->cacheForever($cacheName , $data);

        return $data;

    }

    public function getCountriesTree($language = null)
    {

        $this->cacheFlush();

        $language = $language ?? app()->getLocale();
        // $cacheName = 'countries-tree'.'-'.$language ;

        // if ( $this->cacheHas($cacheName) ) {
        //   return $this->cacheGet($cacheName);
        // }

        $data = UtilHelper::buildTree( $this->getAll() ) ;
        // $this->cacheForever($cacheName,$data);

        return $data;
    }

    public function getActiveCountriesTreeRoot($language = null)
    {

        $language = $language ?? app()->getLocale();
        $data = $this->queryAll([ 'is_active' => 1 ],$language);
        $temp = [];
        $data = UtilHelper::buildTreeRoot( $data, null, $temp, 0, 0 ) ;

        return $data;
    }

    public function store($request)
    {

      $country = new Country();
      $country->title_general = $request['title'];
      $country->parent_id = $request['parent_id'];
      $country->save();

      return $country;

    }

    public function storeInfo($request)
    {

      $countryInfo = new CountryInfo();
      $countryInfo->title = $request['title'];
      $countryInfo->language = $request['input_language'];
      $countryInfo->country_id = $request['country_id'];
      $countryInfo->access_user_id = Auth::id();
      $countryInfo->ip = UtilHelper::getUserIp();
      $countryInfo->save();

      return $countryInfo;

    }

    public function update( $model , $request)
    {

      // $country->title_general = $request['title'];
      $model->parent_id = $request['parent_id'];
      $model->save();

      return $model;

    }

    public function updateInfo( $model , $request)
    {

      $model->title = $request['title'];
      $model->access_user_id = Auth::id();
      $model->ip = UtilHelper::getUserIp();
      $model->save();

      return $model;

    }

    public function setActive( $country , $status )
    {

        $country->update([ 'is_active' => $status ]);

        $childs = Country::where('parent_id', $country->id)->get();

        foreach ($childs as $child) {
          $this->setActive( $child , $status );
        }


    }

    public function destroyAll($id)
    {

        $temp = [];
        $categories = UtilHelper::buildTreeRoot( Country::all(), null, $temp, $id, 0 ) ;

        $ids = [$id] ;
        foreach ($categories as $category) {
          $ids = array_merge( $ids , [$category['id']]);
        }


        DB::beginTransaction();
        try {
            DB::Table('country_info')->wherein('country_id' , $ids)->delete();
            DB::Table('countries')->wherein('id', $ids )->delete();
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // return $e;
            return __('messages.deleted_faild');
        }

        return true;

    }

}
