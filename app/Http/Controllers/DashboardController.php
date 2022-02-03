<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class DashboardController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('student')){
            return view('studentDashboard');
        }elseif(Auth::user()->hasRole('teacher')){
            return view('teacherDashboard');
        }elseif(Auth::user()->hasRole('admin')){
            return view('adminDashboard');
        }
    }
}
