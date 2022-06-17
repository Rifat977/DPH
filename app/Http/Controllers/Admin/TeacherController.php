<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class TeacherController extends Controller
{
    public function index(){
        if(Auth::user()->hasRole('admin')){
            return Inertia::render('Admin/Teacher');
        }
    }
}
