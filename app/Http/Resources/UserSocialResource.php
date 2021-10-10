<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserSocialResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'value' => $this->value,
            'social_site_title' => $this->social_site ? $this->social_site->getTitle() : '',
            'social_site_icon' => $this->social_site ? $this->social_site->getIconPath() : null,
        ];
    }
}
