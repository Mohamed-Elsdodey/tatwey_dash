<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }

    public function row(){
        return $this->belongsTo(Row::class,'row_id');
    }
    public function threeBadStudents(){
        return $this->hasMany(Student::class,'room_id')->orderBy('number_of_violations','DESC')->orderBy('total_point','ASC');
    }
    public function bestThreeStudents(){
        return $this->hasMany(Student::class,'room_id')->orderBy('total_point','DESC');

    }
    public function students(){
        return $this->hasMany(Student::class,'room_id');
    }

}
