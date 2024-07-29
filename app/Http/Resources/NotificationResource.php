<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class NotificationResource extends JsonResource
{

    public function toArray($request)
    {
        return [
            'id'=>(int)$this->id,
            'title'=>$this->title,
            'type'=>$this->type,
            'text'=>$this->text,
            'date'=>$this->date,
            'foreign_id'=>$this->foreign_id,
            'student'=>new StudentResource($this->whenLoaded('student')),

        ];
    }
}
