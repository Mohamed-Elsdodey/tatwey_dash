<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Parents extends Authenticatable
{
    use HasFactory;
    protected $table='parents';
    protected $guarded=[];



    public function students()
    {
        return $this->hasMany(Student::class, 'phone', 'phone');
    }
}
