<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    protected $guarded=[];


    public function users() { //students

        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id'); 

    }

    public function user() { //authors

        return $this->belongsTo(User::class, 'author_id');

    }

}
