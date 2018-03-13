<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\Students\PostFinishRegRequest;
use Illuminate\Support\Facades\Auth;
use Mail;

class StudentRegFinishController extends Controller
{
    public function createFinishReg()
    {
    	$student = Auth::user()->student;

    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
        // if($student->status->step6 == false) {
    	if($student->status->step5 == false) {
    		return redirect('/');
    	}

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-finish-reg', 
    					compact('student'), ['tab_active' => 'finish']);
    	}
    }

    public function postFinishReg(Request $request)
    {
    	//Post is_completed status to database
    	$student = Auth::user()->student;
    	
    	$student->is_completed = true;

        Mail::send('student-section.students.emails.confirmation', [
                'student_name' => $student->firstname
                
        ], function($message) use ($student) {
            $message->to($student->email);

            $message->subject('Thank you for registering!');
        });

    	$student->update();

    	return redirect('/students/register/congratulation');
    }
}
