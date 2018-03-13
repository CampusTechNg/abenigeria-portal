<?php

namespace App\Http\Controllers;

use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{ 
    public function index()
    {
    	$students = Student::all();
    	return view('admin.students.view-students', compact('students'));
    }

    public function show($uid)
    {
    	$student = Student::where('uid', $uid)->first();
    	return view('admin.students.student-form', compact('student'));
    }

    public function edit($uid)
    {
    	$student = Student::where('uid', $uid)->first();
    	$states = $this->nigerianStates();
        $courses = $this->abeCourses();

    	return view('admin.students.edit-student', compact('student', 'states', 'courses'));
    }

    public function update(Request $request, $uid)
    {
    	$student = Student::where('uid', $uid)->first();

    	//Update student registration record
    	$student->title = $request->title;
    	$student->firstname = ucwords(strtolower($request->firstname));
    	$student->lastname = ucwords(strtolower($request->lastname));
    	$student->othername = ucwords(strtolower($request->othername));
    	$student->gender = $request->gender;
    	$student->age = $request->age;
    	$student->phone = $request->phone;
    	$student->alternative_phone = $request->alternative_phone;
    	$student->email = strtolower($request->email);
    	$student->state_of_residence = $request->state_of_residence;
    	$student->home_address = $request->home_address;
    	$student->office_address = $request->office_address;
        $student->mode_of_study = $request->mode_of_study;
        $student->campus = $request->campus;
        $student->course = $request->course;
    	$student->education_level = $request->education_level;
    	$student->work_experience = $request->work_experience;
    	$student->information_source = $request->information_source;
    	$student->referral_name = $request->referral_name;

    	$student->update();

    	//Update first name and last name in user's table
    	$user = User::where('uid', $student->user_id)->first();
    	$user->firstname = ucwords(strtolower($request->firstname));
    	$user->lastname = ucwords(strtolower($request->lastname));
    	$user->update();

    	return redirect()->back()->with(['success_msg' => 'Updated successfully!']);
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
