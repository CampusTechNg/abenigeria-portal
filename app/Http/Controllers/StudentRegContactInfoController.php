<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRegContactInfoController extends Controller
{
    public function createContactInfo()
    {
    	//Get user's profile details from database
    	$student = Auth::user()->student;

    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	if($student->status->step2 == false) {
    		return redirect('/');
    	}

        $states = $this->nigerianStates();

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-contact-info', 
    					compact('student', 'states'), ['tab_active' => 'contact']);
    	}
    }

    public function postContactInfo(Request $request)
    {
    	$student = Auth::user()->student;
    	$student_status = StudentRegStatus::where('student_id', $student->status->student_id)->first();

    	$this->validate($request, [
            'phone' => 'required|digits_between:11,14',
            'alternative_phone' => 'nullable|digits_between:11,14',
            'email' => 'required|email|unique:students,email,'.$student->id,
            'home_address' => 'required|min:3'
        ]);

    	//Post contact info to database   	
    	$student->phone = $request->phone;
    	$student->alternative_phone = $request->alternative_phone;
    	$student->email = strtolower($request->email);
    	$student->state_of_residence = $request->state_of_residence;
    	$student->home_address = $request->home_address;
    	$student->office_address = $request->office_address;
    	$student->update();

    	//Update students status for step3
    	$student_status->step3 = true;
    	$student_status->update();

    	return redirect('/students/register/course-selection');
    }

    protected function nigerianStates(){
        $states =   [
                        'abi'   => 'Abia',
                        'ada'   => 'Adamawa',
                        'akw'   => 'Akwa Ibom',
                        'ana'   => 'Anambra',
                        'bau'   => 'Bauchi',
                        'bay'   => 'Bayelsa',
                        'ben'   => 'Benue',
                        'bor'   => 'Borno',
                        'cro'   => 'Cross River',
                        'del'   => 'Delta',
                        'ebo'   => 'Ebonyi',
                        'edo'   => 'Edo',
                        'eki'   => 'Ekiti',
                        'enu'   => 'Enugu',
                        'fct'   => 'FCT',
                        'gom'   => 'Gombe',
                        'imo'   => 'Imo',
                        'jig'   => 'Jigawa',
                        'kad'   => 'Kaduna',
                        'kan'   => 'Kano',
                        'kat'   => 'Katsina',
                        'keb'   => 'Kebbi',
                        'kog'   => 'Kogi',
                        'kwa'   => 'Kwara',
                        'lag'   => 'Lagos',
                        'nas'   => 'Nasarawa',
                        'nig'   => 'Niger',
                        'ogu'   => 'Ogun',
                        'ond'   => 'Ondo',
                        'osu'   => 'Osun',
                        'oyo'   => 'Oyo',
                        'pla'   => 'Plateau',
                        'riv'   => 'Rivers',
                        'sok'   => 'Sokoto',
                        'tar'   => 'Taraba',
                        'yob'   => 'Yobe',
                        'zam'   => 'Zamfara'
                     ];
        return $states;
    }


}
