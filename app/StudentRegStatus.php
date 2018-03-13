<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentRegStatus extends Model
{
    protected $fillable = [
        'step1', 'step2', 'step3', 'step4', 'step5', 'step6', 'student_id',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id', 'uid');
    }
}
