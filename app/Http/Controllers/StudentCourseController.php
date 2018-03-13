<?php

namespace App\Http\Controllers;

use App\StudentCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentCourseController extends Controller
{
    public function store(Request $request)
    {
    	$student = Auth::user()->student;

    	$student_course = new StudentCourse;

    	$student_course->course = $request->course;
    	$student_course->module = $request->module;
    	$student_course->student_id = $student->uid;

    	$student_course->save();

    	return response()->json(['success_msg' => 'Submitted successfully'], 200);

    }

    public function destroy($uid)
    {
        $student = StudentCourse::where('student_id', $uid);

        $student->delete();

        return response()->json(['success_msg' => 'Deleted successfully!']);
    }
}
