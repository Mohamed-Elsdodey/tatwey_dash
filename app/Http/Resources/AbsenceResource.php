<?php

namespace App\Http\Resources;

use App\Models\StudentAbsence;
use Illuminate\Http\Resources\Json\JsonResource;

class AbsenceResource extends JsonResource
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
            'date'=>$this->date,
            'type'=>$this->type,
            'delay_day'=>StudentAbsence::where('student_id',$this->student_id)->where('type','delay')->where('date','<=',$this->date)->count(),
            'absence_day'=>StudentAbsence::where('student_id',$this->student_id)->where('type','absence')->where('date','<=',$this->date)->count(),

        ];
    }
}
