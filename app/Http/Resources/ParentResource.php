<?php

namespace App\Http\Resources;

use App\Models\Student;
use Illuminate\Http\Resources\Json\JsonResource;

class ParentResource extends JsonResource
{

    public function toArray($request)
    {
        return [
          'id'=>(int)$this->id,
          'name'=>$this->name,
          'email'=>$this->email,
          'phone'=>$this->phone,
          'students' => StudentResource::collection(Student::with(['row','room'])->where('phone',$this->phone)->get()),
        ];
    }
}
