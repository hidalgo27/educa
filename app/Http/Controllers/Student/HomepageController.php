<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['user', 'admin']);

        return view('home');
    }

    public function video(){
        return view('student.video');
    }

    public function videolist(){
        return view('student.videoList');
    }

}
