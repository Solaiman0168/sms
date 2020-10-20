<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function department()

    {
        return $this->belongsTo(Department::Class);

    }

    public function user()

    {
        return $this->belongsTo('User::Class');
    }

}

