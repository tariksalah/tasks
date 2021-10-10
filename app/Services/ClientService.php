<?php

namespace App\Services;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

use App\Models\Client;
use App\Models\ClientInfo;
use App\Models\Item;
use App\Models\ItemInfo;
use App\User;
use App\Helpers\UtilHelper;

class ClientService
{

    public function store($data)
    {
        $stored = new Client();
        $stored->title_general = $data['name'];
        $stored->client_type_id = $data['client_type_id'];
        if ( isset($data['identity_no'] )) { $stored->identity_no = $data['identity_no']; }
        $stored->mobile = $data['mobile'];
        $stored->ip = UtilHelper::getUserIp();
        if (isset($data['access_user_id'])){ // in api register we dont have user id
          $stored->access_user_id = $data['access_user_id'];
        }
        $stored->save();
        return $stored;
    }

    public function storeInfo($model,$data)
    {
      $stored = new ClientInfo();
      $stored->client_id = $model->id;
      $stored->language = $data['language'];
      $stored->title = $data['name'];
      $stored->alias = $data['alias'];
      if (isset($data['description'])){
        $stored->description = $data['description'];
      }
      $stored->ip = UtilHelper::getUserIp();
      if (isset($data['access_user_id'])){
        $stored->access_user_id = $data['access_user_id'];
      }
      $stored->save();
      return $stored;

    }

    public function update($model,$data)
    {
          if ( isset($data['identity_no'] )) { $model->identity_no = $data['identity_no']; }
          $model->mobile= $data['mobile'];
          $model->ip= UtilHelper::getUserIp();
          $model->access_user_id= $data['access_user_id'];
          $model->save();
          return $model;
    }

    public function updateInfo($model,$data)
    {
        $model->title= $data['name'];
        $model->alias= $data['alias'];
        $model->description= $data['description'];
        $model->ip= UtilHelper::getUserIp();
        $model->access_user_id= $data['access_user_id'];
        $model->save();
        return $model;
    }

    // public function checkUniqueInfolanguage( $model_id , $language )
    // {
    //       $check = ClientInfo::where([
    //         'client_id' => $model_id,
    //         'language' => $language,
    //       ])->exists();
    //
    //       if ($check) {
    //         throw ValidationException::withMessages(['language' => __( 'messages.dublicate_date' , [ 'var' => __('words.language') ]) ]);
    //       }
    // }

    public function checkUniqueCLientName( $data, $language, $current_id = null )
    {
          $check = ClientInfo::where([
            'title' => $data,
            'language' => $language,
          ]);

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['name' => __( 'messages.dublicate_date' , [ 'var' => __('words.name') ]) ]);
          }
    }

    public function checkUniqueCLientIdentityNo( $data, $current_id = null )
    {
          $check = Client::where([ 'identity_no' => $data ]);
//              ->whereNotNull('identity_no');

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['identity_no' => __( 'messages.dublicate_date' , [ 'var' => __('words.identity_no') ]) ]);
          }
    }

    public function deleteClient( $ids )
    {
        Client::whereIn('id',$ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);
        ClientInfo::whereIn('client_id',$ids)->update([ 'is_active' => 0 ]);
        User::forClient()->inAny($ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);
        $clientsIds = Client::whereIn('id',$ids)->pluck('id');
        Item::wherein('client_id',$clientsIds)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1 ]);
        $itemIds = Item::wherein('client_id',$clientsIds)->pluck('id');
        ItemInfo::wherein('item_id',$itemIds)->update([ 'is_active' => 0 ]);

        return true;
    }

    public function deleteClientFromDatabase( $ids )
    {
        $clientsIds = Client::whereIn('id',$ids)->pluck('id');
        Client::whereIn('id',$ids)->delete();
        ClientInfo::whereIn('client_id',$ids)->delete();
        User::forClient()->inAny($ids)->delete();

        Item::wherein('client_id',$clientsIds)->delete();
        $itemIds = Item::wherein('client_id',$clientsIds)->pluck('id');
        ItemInfo::wherein('item_id',$itemIds)->delete();

        return true;
    }

    public function setStatus( $model , $status )
    {
        $model->is_active = $status;
        $model->is_active_admin = $status;
        $model->save();

        return true;
    }

    public function setStatusInfo( $model , $status )
    {
        $model->is_active = $status;
        $model->save();

        return true;
    }

}
