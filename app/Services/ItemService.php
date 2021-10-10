<?php

namespace App\Services;
use Illuminate\Validation\ValidationException;
use App\Models\Item;
use App\Models\ItemInfo;
use App\Helpers\UtilHelper;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class ItemService
{

    public function store($data)
    {
        $item_period_id = null ;
        if (isset($data['item_period_id'])) {
            $item_period_id = $data['item_period_id'];
        }

        return Item::create([
            'client_id' => $data['client_id'],
            'item_type_id' => $data['item_type_id'],
            'title_general' => $data['title'],
            'country_id' => $data['country_id'],
            'item_period_id' => $item_period_id,
            'end_date' => $data['end_date'],
            // 'links' => $data['links'],
            'alias' => $data['alias'],
            'description' => $data['description'],
            'ip' => UtilHelper::getUserIp() ,
            'access_user_id' => $data['access_user_id']
        ]);

    }

    public function storeInfo($model , $data)
    {

      // return DB::table('item_info')->insert([
      //   'language' => $data['language'] ,
      //   'item_id' => $model->id,
      //   'title' => $data['title'],
      //   'alias' => $data['alias'],
      //   'description' => $data['description'],
      //   'ip' => UtilHelper::getUserIp() ,
      //   'access_user_id' => $data['access_user_id']
      // ]);

        return ItemInfo::create([
          'language' => $data['language'] ,
          'item_id' => $model->id,
          'title' => $data['title'],
          'alias' => $data['alias'],
          'description' => $data['description'],
          'ip' => UtilHelper::getUserIp() ,
          'access_user_id' => $data['access_user_id']
        ]);

    }

    public function update($model,$data)
    {
          $item_period_id = null ;
          // because not all item types has item peiod
          if (isset($data['item_period_id'])) {
              $item_period_id = $data['item_period_id'];
          }

          // becuse in mobile we dont update Clinet_id but in Admin panel the admin can change client_id
          if (isset($data['client_id'])){
            $model->client_id = $data['client_id'];
          }
          $model->country_id= $data['country_id'];
          $model->item_period_id= $item_period_id;
          $model->end_date= $data['end_date'];
          // $model->links= $data['links'];
          $model->ip= UtilHelper::getUserIp();
          $model->access_user_id= $data['access_user_id'];
          $model->save();
          return $model;
    }

    public function updateInfo($model,$data)
    {
        $model->title = $data['title'];
        $model->alias = $data['alias'];
        $model->description = $data['description'];
        $model->ip = UtilHelper::getUserIp();
        $model->access_user_id = $data['access_user_id'];
        $model->save();
        return $model;
    }

    public function checkUniqueItemName( $data, $language, $current_id = null )
    {
          $check = ItemInfo::where([
            'title' => $data,
            'language' => $language,
          ]);

          // for check in update action
          $check->when($current_id, function ($q) use($current_id) {
              return $q->where( 'id', '!=', $current_id );
          });

          $check = $check->exists();

          if ($check) {
            throw ValidationException::withMessages(['title' => __( 'messages.dublicate_date' , [ 'var' => __('words.name') ]) ]);
          }
    }

    public function NoEndDate()
    {
        return '2050-01-01 10:10:10';
    }

    public function calculateItemEndDate($period)
    {
        return Carbon::now()->addHour($period);
    }

    public function incementComments($id)
    {
      return Item::find($id)->increment('comments_count');
    }

    public function decrementComments($id)
    {
      return Item::find($id)->decrement('comments_count');
    }

    public function incementLikes($id)
    {
      return Item::find($id)->increment('likes_count');
    }

    public function decrementLikes($id)
    {
      return Item::find($id)->decrement('likes_count');
    }

    public function incementRates($id,$rate)
    {
      return Item::find($id)->Update(['rate' => $rate->rate , 'rate_count' => $rate->rate_count ]);
    }

    public function decrementRates($id,$rate)
    {
      return Item::find($id)->Update(['rate' => $rate->rate , 'rate_count' => $rate->rate_count ]);
    }


    public function incementViews($id)
    {
      return Item::find($id)->increment('views_count');
    }

    public function delete($ids)
    {
        Item::whereIn('id',$ids)->update([ 'is_active' => 0 , 'is_active_admin' => 0 ,'deleted' => 1]);
        $data = Item::whereIn('id',$ids)->pluck('id');
        ItemInfo::wherein('item_id',$data)->update([ 'is_active' => 0 ]);
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

    public function setStatusByClient( $client_id , $status )
    {

        Item::where('client_id',$client_id)->update([ 'is_active' => $status , 'is_active_admin' => $status ]);
        $data = Item::where('client_id',$client_id)->pluck('id');
        ItemInfo::wherein('item_id',$data)->update([ 'is_active' => $status ]);

        return true;
    }



}
