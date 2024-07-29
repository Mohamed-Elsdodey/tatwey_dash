<?php

namespace App\Models;

use App\Http\Traits\NotificationFirebaseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentAbsence extends Model
{
    use HasFactory,NotificationFirebaseTrait;
    protected $guarded=[];

    public function student(){
        return $this->belongsTo(Student::class,'student_id');
    }
    public function moderator(){
        return $this->belongsTo(Moderator::class,'moderator_id');
    }
    public function absence(){
        return $this->hasMany(StudentAbsence::class,'student_id')->where('type','absence');
    }
    public function delay(){
        return $this->hasMany(StudentAbsence::class,'student_id')->where('type','delay');
    }
    protected static function booted()
    {
        parent::booted();

        static::created(function ($model) {
            $student=$model->student;

            $type='تاخير';
            if ($model->type=='absence')
                $type='غياب';
            $title = "تقرير " . $type;

            $text = "تم " . $type . " نجلكم " . $student->name . " يوم " . $model->date;




            $notification=   Notification::create([
                'title'=>$title,
                'type'=>'absence',
                'foreign_id'=>$model->id,
                'student_id'=>$model->student_id,
                'date'=>date('Y-m-d'),
                'text'=>$text,
                'school_id'=>auth('moderator')->user()->school_id,



            ]);
            $student=Student::find($notification->student_id);
            $parent=Parents::where('phone',$student->phone)->first();
            $parent_ides=Parents::where('phone',$student->phone)->pluck('id');
            $notificationObject = [
                'notification' => [
                    'title' => $notification->title,
                    'body' => $notification->text,
                    'sound'=>'default',
                ],
                'data' => [
                    'title' => $notification->title,
                    'body' => $notification->text,
                    'type' => $notification->type,
                    'foreign_id'=>$notification->foreign_id,
                    'student_id'=>$notification->student_id,
                    'parent_id'=>$parent->id??'',


                ],
            ];
            $model->sendFCMNotification($parent_ides, $notificationObject);

        });
    }

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }

}
