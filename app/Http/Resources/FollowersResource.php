<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FollowersResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'follower_id' => $this->user ? $this->user->id : null,
            'follower_name' => $this->user ? $this->user->name : '',
            'follower_image' => $this->user ? $this->user->getImagePath() : null,
            'followed_by_me' => $this->followed_by_me,
        ];
    }
}
