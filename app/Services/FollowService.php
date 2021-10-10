<?php

namespace App\Services;
use App\Models\Follow;

class FollowService
{
    public function validateDoublicateFollow($user_id, $any_id, $for)
    {
        if ($for == 'user') {
          return Follow::where('user_id' , $user_id)->ofAny($any_id)->ForUser()->exists();
        }
    }

    public function disFollow($user_id, $any_id, $for)
    {
        if ($for == 'user') {
          return Follow::where('user_id' , $user_id)->ofAny($any_id)->ForUser()->delete();
        }
    }

}
