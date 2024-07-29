<?php

namespace App\Http\Resources;

use App\Models\Setting;
use App\Models\Student;
use App\Models\StudentReview;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentReviewResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $balance=$total_points=0;
        $room_ranking=1;
        $settings=Setting::firstOrcreate();
        $positive_point=StudentReview::where('type','positive')->where('student_id',$this->student_id)->where('date','<=',$this->date)->where('id','<=',$this->id)->count();
        $negative_point=StudentReview::where('type','negative')->where('student_id',$this->student_id)->where('date','<=',$this->date)->where('id','<=',$this->id)->count();

        if ($this->type=='positive')
        {
           $balance=$positive_point;
        }
        else{
            $balance=$negative_point;
        }
        $total_points=$positive_point+$settings->minimum_student_balance-$negative_point;
        return [
            'id'=>(int)$this->id,
            'date'=>$this->date,
            'type'=>$this->type,
            'points'=>intval(abs($this->points)),
            'category'=>new CategoryResource($this->whenLoaded('category')),
            'teacher'=>new TeacherResource($this->whenLoaded('teacher')),
            'balance'=>$balance,
            'total_points'=>$total_points,
            'room_ranking'=>3,




        ];
    }
}
