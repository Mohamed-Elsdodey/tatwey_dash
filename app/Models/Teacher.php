<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Teacher extends Authenticatable
{
    use HasFactory,HasRoles;

    protected $guarded=[];

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }
    public function rows(){
        return $this->belongsToMany(Row::class,'teacher_rows','teacher_id','row_id');
    }

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
}
