<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentCourse extends Model
{
    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'uid');
    }
}
