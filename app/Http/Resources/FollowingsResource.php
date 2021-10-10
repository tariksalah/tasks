<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FollowingsResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'following_id' => $this->followable ? $this->followable->id : null,
            'following_name' => $this->followable ? $this->followable->name : '',
            'following_image' => $this->followable ? $this->followable->getImagePath() : null,
            'followed_by_me' => $this->followed_by_me,
        ];
    }
}
