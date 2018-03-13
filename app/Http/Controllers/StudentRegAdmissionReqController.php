<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRegAdmissionReqController extends Controller
{
    public function createAdmissionRequirement()
    {
    	//Get user's admission requirement from database
    	$student = Auth::user()->student;

    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	if($student->status->step4 == false) {
    		return redirect('/');
    	}

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-admission-requirement', 
    					compact('student'), ['tab_active' => 'admission']);
    	}
    }

    public function postAdmissionRequirement(Request $request)
    {
    	//Post admission requirement to database
    	$student = Auth::user()->student;
    	$student_status = StudentRegStatus::where('student_id', $student->status->student_id)->first();
    	
    	$student->education_level = $request->education_level;
    	$student->work_experience = $request->work_experience;
    	$student->information_source = $request->information_source;
    	$student->referral_name = $request->referral_name;
    	$student->update();

    	//Update students status for step5
    	$student_status->step5 = true;
    	$student_status->update();

    	// return redirect('/students/register/upload');
        return redirect('/students/register/finish');
    }
}
