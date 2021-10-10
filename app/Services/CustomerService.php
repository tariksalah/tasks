<?php

namespace App\Services;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;
use App\Models\CustomerInfo;

use App\User;
use App\Helpers\UtilHelper;

class CustomerService
{

    public function store($data)
    {
        $stored = new Customer();
        $stored->title_general = $data['name'];
        $stored->ip = UtilHelper::getUserIp();
        if (isset($data['access_user_id'])){
          $stored->access_user_id = $data['access_user_id'];
        }
        $stored->save();
        return $stored;
    }

    public function storeInfo($model,$data)
    {

        $stored = new CustomerInfo();
        $stored->customer_id = $model->id;
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
          $model->title_general = $data['name'];
          $model->ip= UtilHelper::getUserIp();
          $model->access_user_id= $data['access_user_id'];
          $model->save();
          return $model;
    }

    public function updateInfo($model,$data)
    {
        $model->title = $data['name'];
        $model->alias = $data['alias'];
        if (isset($data['description'])){
          $model->description = $data['description'];
        }
        $model->ip = UtilHelper::getUserIp();
        if (isset($data['access_user_id'])){
          $model->access_user_id = $data['access_user_id'];
        }
        $model->save();
        return $model;
    }

    // public function checkUniqueInfolanguage( $model_id , $language )
    // {
    //       $check = CustomerInfo::where([
    //         'customer_id' => $model_id,
    //         'language' => $language,
    //       ])->exists();
    //
    //       if ($check) {
    //         throw ValidationException::withMessages(['language' => __( 'messages.dublicate_date' , [ 'var' => __('words.language') ]) ]);
    //       }
    // }

    public function checkUniqueCustomerName( $data, $language, $current_id = null )
    {
          $check = CustomerInfo::where([
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



    public function delete( $ids )
    {
        Customer::whereIn('id',$ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);
        CustomerInfo::whereIn('customer_id',$ids)->update([ 'is_active' => 0 ]);
        User::forClient()->inAny($ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);

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
