<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;
use App\Models\Admin;
use App\Helpers\UtilHelper;

class AdminService
{


    public function checkUniqueUserTitle( $data, $current_id = null )
    {
          $check = Admin::where([ 'title' => $data ]);

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['mobile' => __( 'messages.dublicate_date' , [ 'var' => __('words.name') ]) ]);
          }
    }


    public function delete($ids)
    {
        Admin::whereIn('id',$ids)->delete();
        return true;
    }

    public function setStatus( $model , $status )
    {
        $model->is_active = $status;
        $model->save();

        return true;
    }

}
