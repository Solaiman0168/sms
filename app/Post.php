<?php

namespace App;

use Hamcrest\Internal\SelfDescribingValue;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    // Setup fields of table "posts"
    protected $fillable = ['id', 'title', 'description', 'department_name', 'subject_name' , 'user_id'];

    public function department()

    {
        return $this->belongsTo(Department::Class);

    }


    public function subject()
    {
        return $this->belongsTo(Subject::Class);
    }


    public function user()

    {
        return $this->belongsTo(User::Class);
    }

}

