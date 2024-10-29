<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Course extends Model
{
    protected $guarded=[];


    public function users() {

        return $this->belongsTo(User::class);


    }

    public function user() {

        return $this->belongsTo(User::class);


    }

}
