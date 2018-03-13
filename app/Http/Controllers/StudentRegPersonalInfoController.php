<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Students\PostPersonalInfoRequest;
use Illuminate\Support\Facades\Auth;

class StudentRegPersonalInfoController extends Controller
{
    public function createPersonalInfo()
    {
    	//Get user's profile details from database
    	$student = Auth::user()->student;
    	
    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	if($student->status->step1 == false) {
    		return redirect('/');
    	}

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-profile-info', 
    					compact('student'), ['tab_active' => 'profile']);
    	}
    }

    public function postPersonalInfo(PostPersonalInfoRequest $request)
    {
    	//Post personal info to database
    	$student = Auth::user()->student;
    	$student_status = StudentRegStatus::where('student_id', $student->status->student_id)->first();
    	
        //Get the gender using the title provided by the user
        if($request->title == 'Mr'){
            $student->gender = 'Male';
        } else {
            $student->gender = 'Female';
        }

    	$student->title = $request->title;
    	$student->firstname = ucwords(strtolower($request->firstname));
    	$student->lastname = ucwords(strtolower($request->lastname));
    	$student->othername = ucwords(strtolower($request->othername));
    	$student->age = $request->age;
    	$student->update();

    	//Update first name and last name in user's table
    	$user = User::where('uid', Auth::user()->uid)->first();
    	$user->firstname = ucwords(strtolower($request->firstname));
    	$user->lastname = ucwords(strtolower($request->lastname));
    	$user->update();

    	//Update students status for step2
    	$student_status->step2 = true;
    	$student_status->update();

    	return redirect('/students/register/contact');
    }
}
