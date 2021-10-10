<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;
use App\Models\Follow;
use App\Models\UserType;
use App\Models\SocialSite;
use App\Models\UserSocial;
use App\Helpers\UtilHelper;

use App\Traits\FileUpload;

class UserService
{
    use FileUpload;

    // no store for user because it's morphed to others so we store user across client
    public function fields( $data )
    {
        return [
          // 'user_type_id' => $data['user_type_id'],
          'name' => $data['name'],
          'email' => $data['email'],
          'mobile' => $data['mobile'],
          'password' => $data['password'],
          'ip' => UtilHelper::getUserIp(),
        ];
    }

    public function update( $model , $data )
    {
        $model->name= $data['name'];
        $model->email= $data['email'];
        $model->mobile= $data['mobile'];
        if ($data['password']){ $model->password= $data['password']; }
        $model->ip= UtilHelper::getUserIp();
        $model->access_user_id= $data['access_user_id'];
        $model->save();
        return $model;
    }

    public function storeSocials($user,$data)
    {
        $user->user_socials()->delete();
        if (isset($data['facebook'])) {
          $socialSite = SocialSite::where('alias','facebook')->select('id')->first();
          UserSocial::create( [ 'user_id' => $user->id , 'social_site_id' => $socialSite->id , 'value' => $data['facebook'] ] );
        }
        if (isset($data['tweeter'])){
          $socialSite = SocialSite::where('alias','tweeter')->select('id')->first();
          UserSocial::create( [ 'user_id' => $user->id , 'social_site_id' => $socialSite->id , 'value' => $data['tweeter'] ] );
        }
        if (isset($data['youtube'])){
          $socialSite = SocialSite::where('alias','youtube')->select('id')->first();
          UserSocial::create( [ 'user_id' => $user->id , 'social_site_id' => $socialSite->id , 'value' => $data['youtube'] ] );
        }
        if (isset($data['snapchat'])){
          $socialSite = SocialSite::where('alias','snapchat')->select('id')->first();
          UserSocial::create( [ 'user_id' => $user->id , 'social_site_id' => $socialSite->id , 'value' => $data['snapchat'] ] );
        }
        if (isset($data['instagram'])){
          $socialSite = SocialSite::where('alias','instagram')->select('id')->first();
          UserSocial::create( [ 'user_id' => $user->id , 'social_site_id' => $socialSite->id , 'value' => $data['instagram'] ] );
        }
        return true;
    }

    public function getFollowersCount( $user_id )
    {
        return Follow::ofAny($user_id)->forUser()->count();
    }

    public function getFollowers( $user_id , $pages = null)
    {
        $data = Follow::with('user')->ofAny($user_id)->forUser();
        if ($pages){
            return $data->paginate($pages);
        }
        return $data->get();
    }


    public function getFollowingsCount( $user_id )
    {
        return Follow::ofUser($user_id)->forUser()->count();
    }

    public function getFollowings( $user_id , $pages = null)
    {
        $data = Follow::ofUser($user_id)->forUser();
        if ($pages){
            return $data->paginate($pages);
        }
        return $data->get();
    }

    public function isFollowedByMe( $user_id  , $follower_id)
    {
        return Follow::ofUser($user_id)->ofAny($follower_id)->forUser()->exists();
    }

    public function checkUniqueUserMobile( $data, $current_id = null )
    {
          $check = User::where([ 'mobile' => $data ]);

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['mobile' => __( 'messages.dublicate_date' , [ 'var' => __('words.mobile') ]) ]);
          }
    }

    public function checkUniqueUserEmail( $data, $current_id = null )
    {
          $check = User::where([ 'email' => $data ])->whereNotNull('email');

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['email' => __( 'messages.dublicate_date' , [ 'var' => __('words.email') ]) ]);
          }
    }


    // public function getFrontTypes()
    // {
    //   return UserType::forFront()->pluck('id')->toArray();
    // }

    public function updateFcm($user,$request)
    {
        return $user->update(['fcm_token' => $request->fcm_token , 'mobile_type' => $request->mobile_type]);
    }


    public function deleteUser($ids)
    {
        User::whereIn('id',$ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);
        return true;
    }

    public function destroy($ids)
    {
        User::whereIn('id',$ids)->delete();
        return true;
    }


    public function validateActiveStatus( $status )
    {

        if ( $status != 0) {
          return true;
        }

        // check to don't deactivate last Manager in the system
        if ( $this->getCountActiveAdmins() == 1 ) {
          return false;
        }

        return true;

    }

    public function getCountActiveAdmins()
    {
        // used when deactivate any user if this user is last one admin so don't deactivaet it
        return User::active()->with('roles')->wherehas('roles' , function($query) {
          return $query->where('role_id',1);
        })->count();
    }



    public function setStatus( $model , $status )
    {
        $model->is_active = $status;
        $model->is_active_admin = $status;
        $model->save();

        return true;
    }

    public function saveMedia( $field, $request, $params = [] )
    {

        $path = $this->storeFile( $request , $params + [ 'folder' => User::FOLDER ] );
        if (! $path) {
          throw ValidationException::withMessages([ $field =>  __('messages.error_upload_image' , [ 'var' => __('words.image') ] )  ]);
        }
        return $path;

    }



    public function checkActive( $user )
    {
      if ($user->isActive(0)) {
        // throw ValidationException::withMessages(['user' => __( 'auth.in_active') ]);
        // abort( response()->json(['message' => __( 'auth.in_active')], 401)  );
        abort( 401 ,  __( 'auth.in_active'));
      }
    }

    public function checkActiveAdmin( $user )
    {
      if ($user->isActiveAdmin(0)) {
        // throw ValidationException::withMessages(['user' => __( 'auth.in_active') ]);
        // abort( response()->json(['message' => __( 'auth.in_active')], 401)  );
        abort( 401 ,  __( 'auth.in_active'));
      }
    }

    public function checkDeleted( $user )
    {
      if ($user->isDeleted(1)) {
        // throw ValidationException::withMessages(['user' => __( 'auth.deleted') ]);
        abort( 401 ,  __( 'auth.deleted'));
      }
    }

    public function checkforFront( $user )
    {

      if ( !$user->isClient() && !$user->isCustomer() ){
         throw ValidationException::withMessages(['user' => __( 'messages.no_data_found') ]);
       }
      // if (! UserType::forFront()->pluck('id')->contains($user->user_type_id) ) {
      //   throw ValidationException::withMessages(['user' => __( 'messages.no_data_found') ]);
      // }

    }


}
