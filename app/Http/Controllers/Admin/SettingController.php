<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\AdminController;
use Illuminate\Http\Request;

use App\Helpers\UtilHelper;
use App\Models\Setting;
use App\Models\ContactUsType;
use App\Services\SettingService;
use App\Traits\FileUpload;
use Validator;

class SettingController extends AdminController
{
    use FileUpload;
    private $settingServ;

    public function __construct(SettingService $settingService)
    {

        $this->settingServ = $settingService;

        $this->share([
          'page' => Setting::PAGE,
          'recordsCount' => Setting::count(),
        ]);

        $this->defaultLanguage = $this->defaultLanguage();

    }

    public function index(Request $request)
    {

        $trans = app()->getLocale();
        if ($request->isMethod('post')) {
          $trans = $request->trans;
        }


        $settings = $this->settingServ->getAll($trans);

        return view('admin.settings.index',compact(['settings','trans']));

    }

    public function update(Request $request)
    {


        $validate = $request->validate([
            'language' => 'required|string|exists:languages,locale',
            'app_title' => 'required|string|max:100',
            'facebook' => 'nullable|string|max:500',
            'tweeter' => 'nullable|string|max:500',
            'instagram' => 'nullable|string|max:500',
            'linkedin' => 'nullable|string|max:500',
            'snapchat' => 'nullable|string|max:500',
            'youtube' => 'nullable|string|max:500',
            'website' => 'nullable|string|max:500',
            'phone_1' => 'nullable|string|max:100',
            'mail' => 'nullable|email|max:300',
            'address' => 'nullable|string|max:500',
            'app_android_lnk' => 'nullable|string|max:500',
            'app_ios_link' => 'nullable|string|max:500',
            'app_share_note' => 'nullable|string|max:500',
            'work_times' => 'nullable|string|max:500',
            'logo' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:500',
            'back_ground' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:3000',
            'about_us' => 'nullable|string',
            'about_us_image' => 'nullable|file|image|mimes:jpeg,png,gif,jpg,svg|max:3000',
            'terms' => 'nullable|string',
            'privacy' => 'nullable|string',
            'lat' => 'nullable|numeric',
            'lng' => 'nullable|numeric',
            'commision_offer_desc' => 'nullable|string|max:5000',
            'commision_order_desc' => 'nullable|string|max:5000',
        ]);



        $settings = Setting::all();
        $update = $this->settingServ->update($settings,$request);
        if ($update !== true) {
          return back()->withinput()->withErrors(['general' => $update ]);
        }


        // upload image
        if( $request->hasFile('logo') ) {
            $path = $this->storeFile($request , [
                'fileUpload' => 'logo',
                'folder' => Setting::FILE_FOLDER,
                'recordId' => 'logo',
            ]);
            Setting::where('property','logo')->Update(['value' => $path]);
        }


        if( $request->hasFile('back_ground') ) {
            $path = $this->storeFile($request , [
                'fileUpload' => 'back_ground',
                'folder' => Setting::FILE_FOLDER,
                'recordId' => 'back_ground',
            ]);
            Setting::where('property','back_ground')->Update(['value' => $path]);
        }



        // upload about us image
        if( $request->hasFile('about_us_image') ) {
            $path = $this->storeFile($request , [
                'fileUpload' => 'about_us_image',
                'folder' => Setting::FILE_FOLDER,
                'recordId' => 'about_us_image',
            ]);
            Setting::where('property','about_us_image')->Update(['value' => $path]);
        }


        $this->flashAlert([
          'success' => ['msg'=> __('messages.updated')]
        ]);

        return back();

    }

    public function addMsgType(Request $request)
    {

      $validator = Validator::make($request->all(), [
          'title' => 'required|string|max:250|unique:contact_us_types',
      ]);
      // $errors = $validator->errors();

      if ($validator->fails()) {
          return back()->withErrors($validator);
      }

      $msgType = new \App\Models\ContactUsType();
      $msgType->title = $request->title;
      $msgType->save();

      return back();

    }

    public function updateMsgType(Request $request,$id)
    {
      $validator = Validator::make($request->all(), [
          'title' => 'required|string|max:250|unique:contact_us_types,title,'.$id,
      ]);
      // $errors = $validator->errors();

      if ($validator->fails()) {
          return back()->withErrors($validator);
      }

      \App\Models\ContactUsType::where('id',$request->id)->update(['title'=> $request->title]);
      return back()->with('alert_msgtype','تم التعديل');

    }


}
