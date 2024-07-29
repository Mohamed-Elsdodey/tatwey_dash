<?php

namespace App\Models;

use App\Http\Traits\NotificationFirebaseTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory,NotificationFirebaseTrait;
    protected $guarded=[];

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
    public function  student(){
        return $this->belongsTo(Student::class,'student_id');
    }



//    protected static function booted()
//    {
//        parent::booted();
//
//        static::created(function ($model) {
//            $parent_ides=Parents::where('phone',$model->student_id)->pluck('id');
//
//            $notificationObject = [];
//            $notificationObject['id'] = $model->id;
//            $notificationObject['title'] = $model->title;
//            $notificationObject['text'] = $model->text;
//            $notificationObject['type'] = $model->type;
//            $notificationObject['foreign_id'] = $model->foreign_id;
//
//            $model->sendFCMNotification($parent_ides, $notificationObject);
//
//
//
//        });
//    }


}
