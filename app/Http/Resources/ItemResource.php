<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class itemResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'type' => $this->item_type_id,
            'created_at' => $this->created_at,
            'item_period_id' => $this->item_period_id,

            // 'title' => $this->activeTranslation->first()->title,
            'description' => $this->activeTranslation->first()->description,
            'rate' => $this->rate,
            'rates_count' => $this->rate_count,
            'likes_count' => $this->likes_count,
            'views_count' => $this->views_count,
            'shares_count' => $this->shares_count,
            'comments_count' => $this->comments_count,
            'country' => $this->country ?
                    (! $this->country->activeTranslation->isEmpty() ) ? $this->country->activeTranslation->first()->title : null
                    : null,

            'client_title' => (! $this->client->activeTranslation->isEmpty() ) ? $this->client->activeTranslation->first()->title : '',
            'client_image' => ($this->client->user) ? $this->client->user->getImagePath() : null,
            'user_id' => ($this->client->user) ? $this->client->user->id : null,

            'images' => \App\Http\Resources\FileResource::collection ( $this->images ),
            'videos' => \App\Http\Resources\FileResource::collection( $this->video ),

            'isRatedByMe' => auth('api')->user() ?
                  ( $this->isRatedByMe( auth('api')->user() ) ? true : false )
                : false,

        ];
    }


}
