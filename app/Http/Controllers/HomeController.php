<?php

namespace App\Http\Controllers;

use App\StudentRegStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Auth::user()->student;
        if($student){
        
            $status = StudentRegStatus::where('student_id', $student->uid)->first();
            return view('home', compact('status', 'student'));
        } else {
            return view('home', [ 'status' => '', 'student' => '' ]);
        }
        
        
    }
}
