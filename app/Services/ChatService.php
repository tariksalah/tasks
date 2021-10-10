<?php

namespace App\Services;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\User;
use App\Models\Chat;
// use App\Helpers\UtilHelper;

class ChatService
{

    public function getUserChats( $user_id )
    {
        return Chat::with(['sender_user:id,name,image','receiver_user:id,name,image'])->where( 'sender_user_id' , $user_id )->orwhere( 'receiver_user_id' , $user_id )->get();
    }

    public function makeChatId( $user_id , $data)
    {

        $ids = '';
        foreach ($data as $item) {

            if ( $item->sender_user_id == $user_id) {
              if ( $item->receiver_user_id > $user_id) {
                  $item->chat_id = $user_id . ',' . $item->receiver_user_id ;
              } else {
                $item->chat_id = $item->receiver_user_id . ',' . $user_id ;
              }
            }

            if ( $item->receiver_user_id == $user_id) {
              if ( $item->sender_user_id > $user_id) {
                  $item->chat_id = $user_id . ',' . $item->sender_user_id ;
              } else {
                $item->chat_id = $item->sender_user_id . ',' . $user_id ;
              }
            }

        }

        return $data;

    }



}
