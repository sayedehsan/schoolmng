<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Hash;
use Auth;

class AuthController extends Controller
{
    public function login()
    {
        // dd(Hash::make(123456));
        if (!empty(Auth::check())) {
            if (Auth::user()->type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->type == 2) {
                return redirect('office/dashboard');
            } else if (Auth::user()->type == 3) {
                return redirect('parent/dashboard');
            } else if (Auth::user()->type == 4) {
                return redirect('student/dashboard');
            }else if (Auth::user()->type == 5) {
                return redirect('teacher/dashboard');
            } else {
                return view('auth.login');
            }
        } else {
            return view('auth.login');
        }
    }

    public function loginCheck(Request $request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if (Auth::attempt(['email' => $email, 'password' => $password], true)) {
            if (Auth::user()->type == 1) {
                return redirect('admin/dashboard');
            } else if (Auth::user()->type == 2) {
                return redirect('office/dashboard');
            } else if (Auth::user()->type == 3) {
                return redirect('parent/dashboard');
            } else if (Auth::user()->type == 4) {
                return redirect('student/dashboard');
            }else if (Auth::user()->type == 5) {
                return redirect('teacher/dashboard');
            } else {
                return redirect()->back()->with('error', 'Please enter currect email and password!');
            }
        } else {
            return redirect()->back()->with('error', 'Please enter currect email and password!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url(''));
    }
}
