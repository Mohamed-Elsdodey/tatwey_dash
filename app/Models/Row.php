<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Row extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
    public function rooms(){
        return $this->hasMany(Room::class,'row_id');
    }

    public function categories(){
        return $this->belongsToMany(Category::class,'row_categories','row_id','category_id');
    }
}
