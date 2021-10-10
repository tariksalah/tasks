<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'user_type_id' => $this->isCustomer() ? 4 : ($this->isClient() ? $this->userable ? $this->userable->client_type_id : null : null ),
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'image' => $this->getImagePath(),
            'commerce_record' => $this->commerce_record ? $this->commerce_record : null ,
            'created_at' => $this->created_at,

            'identity_no' => ( $this->userable ) ? $this->userable->identity_no : null,
            'description' => ( ! $this->userable->activeTranslation->isEmpty() ) ? $this->userable->activeTranslation->first()->description : null,

            'followers_count' => $this->followers_count ?? null,
            'followings_count' => $this->followings_count ?? null,

            // 'user_social' => \App\Http\Resources\UserSocialResource::collection ( $this->user_socials ),
            'facebook' => $this->facebook ?? '',
            'tweeter' => $this->tweeter ?? '',
            'youtube' => $this->youtube ?? '',
            'snapchat' => $this->snapchat ?? '',
            'instagram' => $this->instagram ?? '',

            'isFollowedByMe' => $this->isFollowedByMe ?? false,

            // 'access_token' => isset($this->access_token) ? $this->access_token : null,



        ];
    }
}
