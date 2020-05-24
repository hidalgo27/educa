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

        return view('student.home');
    }

    public function video(){
        return view('student.video');
    }

    public function videolist(){
        return view('student.videoList');
    }

    public function profile(){
        return view('student.profile');
    }

    public function suscripcion(){
        return view('student.suscripcion');
    }

    public function temario(){
        return view('student.clasesVivo');
    }

    public function temario_curso(){
        return view('student.temario');
    }

}
