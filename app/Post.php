<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';

    // Setup fields of table "posts"
    protected $fillable = ['id', 'title', 'description', 'department_name','user_id'];

    public function department()

    {
        // Relation department to foreign key
        return $this->belongsTo(Department::Class);

    }

    public function user()

    {
        return $this->belongsTo(User::Class);
    }

}

