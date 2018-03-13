<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentRegUploadController extends Controller
{
    public function createUpload()
    {
    	//Get user's upload details from database
    	$student = Auth::user()->student;

    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}
    	if($student->status->step5 == false) {
    		return redirect('/');
    	}
    	if(count($student) < 1){
    		return redirect('students/register/not-found');
    	}

    	if($student->is_completed){
    		return redirect('/students/register/congratulation');
    	} else {
    		return view('student-section.students.create-upload', 
    					compact('student'), ['tab_active' => 'upload']);
    	}
    }

    public function postUpload(Request $request)
    {
	    if($request->old_photo == 'noimage.png'){
	    	$this->validate($request, [
	            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1000'
	        ]);
		}

    	$student = Auth::user()->student;
    	$student_status = StudentRegStatus::where('student_id', $student->status->student_id)->first();
    	
    	//UPLOAD PASSPORT PHOTOGRAPH
        if($request->hasFile('photo')) {

        	$this->validate($request, [
	            'photo' => 'required|image|mimes:jpeg,png,jpg|max:1000'
	        ]);

            $fileNameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $fileNameToStore = uniqid(true) . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('', $fileNameToStore, 'student_image_folder');

            $student->photo = $fileNameToStore;
            
            //Delete old photo if photo name is not 'noimage.png' and if old photo name does not exist in database
            if($request->old_photo != 'noimage.png' && $request->old_photo != '') {
                $path = config('app.student_image_folder_path');
                unlink($path.$request->old_photo); 
            }
        }

        //UPLOAD ACADEMIC CERT 1
    	if($request->hasFile('acad_cert_1')){
        	$student->acad_cert_1 = $this->uploadDoc('acad_cert_1', $request, $student);
    	}

    	//UPLOAD ACADEMIC CERT 2
    	if($request->hasFile('acad_cert_2')){
        	$student->acad_cert_2 = $this->uploadDoc('acad_cert_2', $request, $student);
    	}

    	//UPLOAD ACADEMIC CERT 3
    	if($request->hasFile('acad_cert_3')){
        	$student->acad_cert_3 = $this->uploadDoc('acad_cert_3', $request, $student);
    	}

    	//UPLOAD ACADEMIC CERT 4
    	if($request->hasFile('acad_cert_4')){
        	$student->acad_cert_4 = $this->uploadDoc('acad_cert_4', $request, $student);
    	}

    	//UPLOAD CV
    	if($request->hasFile('cv')){
        	$student->cv = $this->uploadDoc('cv', $request, $student);
    	}

        $student->update();


    	//Update students status for step6
    	$student_status->step6 = true;
    	$student_status->update();

    	return redirect('/students/register/finish');
    }


    protected function uploadDoc($input_field, $request, $student)
    {
    	if($request->hasFile($input_field)) {

        	$this->validate($request, [
	            $input_field => 'mimes:pdf,jpg,jpeg,png,doc,docx|max:3000'
	        ]);

            $fileNameWithExt = $request->file($input_field)->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file($input_field)->getClientOriginalExtension();
            $fileNameToStore2 = md5(uniqid(true) . str_random(10) . '_' . time()) . '.' . $extension;
            $path = $request->file($input_field)->storeAs('', $fileNameToStore2, 'student_doc_folder');

            //Delete old doc if doc name is not NULL or if old doc name does not exist in database
            if($student->$input_field != NULL) {
	            $path = config('app.student_doc_folder_path');
	            unlink($path.$student->$input_field); 
	        }

            return $fileNameToStore2;
        }
    }
}
