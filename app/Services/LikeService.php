<?php

namespace App\Services;
use App\Models\ULike;

class LikeService
{
    public function validateDoublicateLike($user_id, $any_id, $for)
    {
        if ($for == 'item') {
          return ULike::where('user_id' , $user_id)->ofAny($any_id)->ForItem()->exists();
        }
    }

    public function disLike($user_id, $any_id, $for)
    {
        if ($for == 'item') {
          return ULike::where('user_id' , $user_id)->ofAny($any_id)->ForItem()->delete();
        }
    }

}
