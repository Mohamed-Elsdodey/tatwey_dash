<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=>(int)$this->id,
            'name'=>$this->name,
            'image'=>get_file($this->image),
            'phone'=>$this->phone,
            'positive_point'=>(int)$this->positive_point,
            'negative_point'=>(int)$this->negative_point,
            'total_point'=>(int)$this->total_point,
            'number_of_violations'=>(int)$this->number_of_violations,
            'row'=>new RowResource($this->whenLoaded('row')),
            'room'=>new RoomResource($this->whenLoaded('room')),
            'new_notification_count' => $this->newNotificationCount(),
            'school_rank'=>$this->rank(),
            'row_rank'=>$this->row_rank(),
            'room_rank'=>$this->room_rank(),




        ];
    }
}
