<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable=['registration_id','name','subject_name','department_name','image','info'];
}
