<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class Moderator extends Authenticatable
{
    use HasFactory,HasRoles;
    protected $guarded=[];

    public function scopeProperty($query)
    {
        return $query->where('school_id', auth('admin')->user()->school_id);
    }
    public function rows(){
        return $this->belongsToMany(Row::class,'moderator_rows','moderator_id','row_id');
    }
}
