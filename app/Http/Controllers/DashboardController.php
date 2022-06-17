<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function index(){
       if(Auth::user()->hasRole('admin')){
            return Inertia::render('Admin/Dashboard');
       }else if(Auth::user()->hasRole('teacher')){
            return Inertia::render('Teacher/Dashboard');
       }else{
            return Inertia::render('Student/Dashboard');
        }
    }

}
