<?php

namespace App\Http\Resources;
use Illuminate\Http\Resources\Json\JsonResource;

class CommentResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'comment' => $this->comment,
            'childs_count' => $this->childs_count,
            'created_at' => $this->created_at,
            'parent_id' => $this->parent_id,
            'main_parent_id' => $this->main_parent_id,

            'user_id' => $this->user ? $this->user->id : null,
            'user_title' => $this->user ? $this->user->name : null,
            'user_image' => $this->user ? $this->user->getImagePath() : null,

            'mention_user_id' => $this->parent ?
                                $this->parent->user ? $this->parent->user->id : null
                              : null,
            'mention_user_title' => $this->parent ?
                                $this->parent->user ? $this->parent->user->name : null
                              : null,
            'mention_user_image' => $this->parent ?
                                $this->parent->user ? $this->parent->user->getImagePath() : null
                              : null
        ];
    }


}
