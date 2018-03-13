<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRegCongratulationController extends Controller
{
    public function regCongratulation()
    {
    	$student = Auth::user()->student;
    	
    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	return view('student-section.students.reg-congratulation');
    }

    public function regNotFound()
    {
    	return view('student-section.students.reg-not-found');
    }
}
