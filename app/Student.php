<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public function status()
    {
        return $this->hasOne('App\StudentRegStatus', 'student_id', 'uid');
    }

    public function courses()
    {
        return $this->hasMany('App\StudentCourse', 'student_id', 'uid');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'uid');
    }
}
