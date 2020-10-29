<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = ['subject_name'];

    public function posts()
    {
        return $this->hasMany(Post::Class);
    }


}
