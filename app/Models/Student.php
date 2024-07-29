<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function row(){
        return $this->belongsTo(Row::class,'row_id');
    }
    public function room(){
        return $this->belongsTo(Room::class,'room_id');
    }
    public function rank(){
        return Student::where('total_point','>',$this->total_point)->where('school_id',$this->school_id)->count()+1;
    }
    public function room_rank(){
        return Student::where('total_point','>',$this->total_point)->where('row_id',$this->row_id)->where('room_id',$this->room_id)->where('school_id',$this->school_id)->count()+1;
    }
    public function row_rank(){
        return Student::where('total_point','>',$this->total_point)->where('row_id',$this->row_id)->where('school_id',$this->school_id)->count()+1;
    }

    public function newNotificationCount(){
        return Notification::where('student_id',$this->id)->where('is_read',0)->where('school_id',$this->school_id)->count();

    }
    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
}
