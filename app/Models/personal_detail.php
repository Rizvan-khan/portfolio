<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class personal_detail extends Model
{
    protected $fillable = ['designation','paragraph','dob','email','mobile','city','image','age','degree']; 
}
