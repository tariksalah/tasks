<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{

    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'user_sender_id' => $this->user_sender_id,
            'user_sender_name' => $this->user_sender ?  $this->user_sender->name : null,
            'user_sender_image' => $this->user_sender ?  $this->user_sender->image : null,
            'user_reciever_id' => $this->user_reciever_id,
            'item_type' => $this->item_type,
            'item_id' => $this->table_id,
            'type' => (int)$this->type,
            'data' => $this->data,
            'read_at' => $this->read_at,
            'created_at' => $this->created_at,
        ];
    }


}
