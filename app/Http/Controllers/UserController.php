<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('role', 'Admin')->get();

        return view('admin.users.view-users', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create-user');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $user = new User;

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->is_active = true;
        $user->uid = md5(time().str_random(10).$request->firstname.$request->lastname);
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect()->back()->with(['success_msg' => 'User created successfully!']);
    }

    public function edit($uid)
    {
        $user = User::where('uid', $uid)->first();

        return view('admin.users.edit-user', compact('user'));
    }

    public function update(Request $request, $uid)
    {
        $user = User::where('uid', $uid)->first();

        $this->validate($request, [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'role' => 'required',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id
        ]);

        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->role = $request->role;
        $user->email = $request->email;

        $user->update();

        return redirect()->back()->with(['success_msg' => 'User updated successfully!']);
    }

    public function deleteUser($uid)
    {
        $user = User::where('uid', $uid)->first();
        $user->delete();

        return redirect()->back()->with(['success_msg' => 'User deleted successfully!']);
    }

    public function deleteStudent($uid)
    {
        $user = User::where('uid', $uid)->first();

        if($user->student->photo != 'noimage.png') {
            $path = config('app.student_image_folder_path');
            unlink($path.$user->student->photo); 
        }

        if($user->student->acad_cert_1 != NULL) {
            $path = config('app.student_doc_folder_path');
            unlink($path.$user->student->acad_cert_1); 
        }

        if($user->student->acad_cert_2 != NULL) {
            $path = config('app.student_doc_folder_path');
            unlink($path.$user->student->acad_cert_2); 
        }

        if($user->student->acad_cert_3 != NULL) {
            $path = config('app.student_doc_folder_path');
            unlink($path.$user->student->acad_cert_3); 
        }

        if($user->student->acad_cert_4 != NULL) {
            $path = config('app.student_doc_folder_path');
            unlink($path.$user->student->acad_cert_4); 
        }

        if($user->student->cv != NULL) {
            $path = config('app.student_doc_folder_path');
            unlink($path.$user->student->cv); 
        }

        $user->delete();

        return redirect()->back()->with(['success_msg' => 'Deleted successfully!']);
    }


    public function changePassword()
    {
        return view('change-password');
    }

    public function postChangePassword(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required|string|min:6',
            'new_password' => 'required|string|min:6',
            'confirm_password' => 'required|string|min:6|same:new_password'
        ]);
        
        $user = User::where('uid', Auth::user()->uid)->first();

        if(!Hash::check($request->old_password, $user->password)){

            return redirect()->back()->with([ 'error_msg' => 'Old password is wrong!' ]);

        } else {
            $user->password = bcrypt($request->new_password);
            $user->update();
            return redirect()->back()->with([ 'success_msg' => 'Password changed!' ]);
        }
    }
    
}
