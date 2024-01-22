<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $data['header_title'] = "Dashboard";
        if (Auth::user()->type == 1) {
            return view('admin.dashboard',$data);
        } else if (Auth::user()->type == 2) {
            return view('office.dashboard',$data);
        } else if (Auth::user()->type == 3) {
            return view('parent.dashboard',$data);
        } else if (Auth::user()->type == 4) {
            return view('student.dashboard',$data);
        }else if (Auth::user()->type == 5) {
            return view('teacher.dashboard',$data);
        } else {
            return view('auth.login');
        }
    }
}
