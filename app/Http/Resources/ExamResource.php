<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExamResource extends JsonResource
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
            'degree_of_exam'=>(int)$this->degree_of_exam,
            'degree_of_student'=>$this->degree_of_student,
            'category'=>new CategoryResource($this->whenLoaded('category')),
            'teacher'=>new TeacherResource($this->whenLoaded('teacher')),


        ];
    }
}
