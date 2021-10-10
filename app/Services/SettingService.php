<?php

namespace App\Services;
use Illuminate\Support\Facades\DB;
use App\Helpers\UtilHelper;
use App\Models\Setting;

class SettingService
{

    // return collection
    public function getAll($language = null)
    {
        $language = $language ?? app()->getLocale();

        $settings = Setting::where('is_active',1)->orderby('sort')->get();

        $settings->transform(function ($item, $key) use($language){

          // for translation fileds
          if ($item->is_translated) {
            $allTrans = UtilHelper::decodeData($item->value,true);
            $newValue = '';
            if (isset($allTrans[$language])){
              $newValue = $allTrans[$language];
            }
            $item->value = $newValue;

            if ($item->property == 'logo'){
              $item->value = asset('storage/app/'.$newValue);
            }

            if ($item->property == 'banner'){
              $item->value = asset('storage/app/'.$newValue);
            }
          }

          return $item;
        });

        return $settings;

    }

    // return model
    public function getSettingByProperty($property,$language = null)
    {
        $language = $language ?? app()->getLocale();

        $item = Setting::where('property',$property)->first();
        if (!$item) {
          return false;
        }

        if ($item->is_translated) {
          $allTrans = UtilHelper::decodeData($item->value,true);
          $newValue = $allTrans[$language];

          $item->value = $newValue;

          if ($item->property == 'logo'){
            $item->value = asset('storage/app/'.$newValue);
          }

        }
        return $item;


    }

    public function getSettingByProperties($property = [] ,$language = null)
    {
      $language = $language ?? app()->getLocale();

      $items = Setting::wherein('property',$property)->get();

      $all = [];
      foreach ($items as $property => $item) {
        if ($item->is_translated) {
          $allTrans = UtilHelper::decodeData($item->value,true);
          $newValue = $allTrans[$language];
          $item->value = $newValue;
          $all = $all + [ $item->property => $item->value];
        } else {
          $all = $all + [ $item->property => $item->value];
        }
      }


      return $all;
    }


    public function getSettingContacts($language = null)
    {
        $language = $language ?? app()->getLocale();

        $items = Setting::wherein('property',['phone_1','mail','address','facebook','tweeter','instagram','youtube','snap_shat','work_times'])->get();

        $all = [];
        foreach ($items as $property => $item) {
          if ($item->is_translated) {
            $allTrans = UtilHelper::decodeData($item->value,true);
            $newValue = $allTrans[$language];
            $item->value = $newValue;
            $all[] = [ $item->property => $item->value];
          } else {
            $all[] = [ $item->property => $item->value];
          }
        }


        return $all;


    }



    public function update($settings,$request)
    {



      try {
          foreach ($settings as $setting) {
              $property = $setting->property;

              if ( $setting->is_translated ) {
                // 1 array
                $data = UtilHelper::decodeData($setting->value,true);
                if (empty($data)) {
                  $data = [ $request->language => $request->$property ];
                } else {
                  $data = array_merge( $data ,[ $request->language => $request->$property ]);
                }
                $setting->update(['value' => UtilHelper::encodeData($data) ]);
              } else {
                // 2 just save value not array
                // dont save logo it will be saved after upload in controller
                if ($property == 'logo') {
                  continue;
                }
                if ($property == 'back_ground') {
                  continue;
                }
                if ($property == 'about_us_image') {
                  continue;
                }

                $data = $request->$property;
                $setting->update(['value' => $data ]);
              }
          }
      } catch (\Exception $e) {
          return $e->getMessage();
      }

      return true;

    }

    // return collection
    public function settingsFront($language = null)
    {

        // $language = $language ?? app()->getLocale();
        //
        // return settings::wherein('property',['','','','','','',]);
    }

    // return collection
    public function settingsAdmin($language = null)
    {

        // $language = $language ?? app()->getLocale();
        //
        // return settings::wherein('property',['','','','','','',]);
    }

}
