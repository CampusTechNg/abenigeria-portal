<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRegCourseInfoController extends Controller
{
    public function createCourseInfo()
    {
    	//Get user's course details from database
    	$student = Auth::user()->student;

        $courses = $this->abeCourses();

    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	if($student->status->step3 == false) {
    		return redirect('/');
    	}

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-course-info', 
    					compact('student', 'courses'), ['tab_active' => 'course']);
    	}
    }

    public function postCourseInfo(Request $request)
    {
    	$this->validate($request, [
            'mode_of_study' => 'required',
            'campus' => 'required',
            'course' => 'required'
        ]);

    	//Post contact info to database
    	$student = Auth::user()->student;
    	$student_status = StudentRegStatus::where('student_id', $student->status->student_id)->first();
    	
    	$student->mode_of_study = $request->mode_of_study;
        $student->campus = $request->campus;
    	$student->course = $request->course;
    	$student->update();

    	//Update students status for step4
    	$student_status->step4 = true;
    	$student_status->update();

    	return redirect('/students/register/admission-requirement');
    }

    protected function abeCourses()
    {
        $courses = [
            "l3_cert_bus_ess" => "Level 3 Certificate in Business Essentials",
            "l4_found_dip_bus_mgt" => "Level 4 Foundation Diploma in Business Management",
            "l4_dip_bus_mgt" => "Level 4 Diploma in Business Management",
            "l4_dip_bus_mgt_hum" => "Level 4 Diploma in Business Management and Human resources",
            "l4_dip_bus_mgt_mark" => "Level 4 Diploma in Business Management and Marketing",
            "l5_dip_bus_mgt" => "Level 5 Diploma Business Management",
            "l5_dip_bus_mgt_hum" => "Level 5 Diploma Business Management and Human Resources",
            "l5_dip_bus_mgt_mark" => "Level 5 Diploma Business Management and Marketing",
            "l6_dip_bus_mgt" => "Level 6 Diploma Business Management",
            "l6_dip_bus_mgt_hum" => "Level 6 Diploma Business Management and Human Resources",
            "l6_dip_bus_mgt_mark" => "Level 6 Diploma Business Management and Marketing",
            "l2_awd_set_up_bus" => "Award in Setting up your own Business",
            "l3_cert_bus_set_up" => "Certificate in Business Start-up",
            "l3_awd_digi_mark" => "Award in Digital Marketing Essentials for Small Businesses",
            "l2_awd_emp" => "Awards in Employability Skills: Making the Move to Work"
        ];

        return $courses;
    }

    
}
