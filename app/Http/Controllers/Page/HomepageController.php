<?php

namespace App\Http\Controllers\Page;

use App\Asignatura;
use App\Http\Controllers\Controller;
use App\Universidad;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index(){

        $universidad = Universidad::all();
        $cursos = Asignatura::all()->sortBy('nombre');
        return(
            view('page.home',
            compact([
                'universidad', 'cursos'
            ])));
    }
    public function cursos(){
        return(view('page.cursos'));
    }
    public function clases(){
        return(view('page.clases'));
    }
    public function video(){
        return(view('page.video'));
    }
    public function video_list(){
        return view('page.videoList');
    }

    public function docente(){
        return view('page.docente');
    }

    public function inscripcion(){
        return view('page.inscripcion');
    }
}
