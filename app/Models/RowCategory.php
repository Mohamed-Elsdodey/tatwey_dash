<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RowCategory extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
}
