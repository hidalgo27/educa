<?php

namespace App\Http\Controllers\Page;

use App\Asignatura;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\ModalidadGrupo;
use App\Tema;
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
    public function cursos(Request $request, $universidad, $modalidad, $grupo){
        $universidad = Universidad::where('id', $universidad)->first();
        $grupos = Grupo::where('id', $grupo)->first();
        $modalidad_grupo = ModalidadGrupo::where('grupo_id', $grupo)->where('modalidad_id', $modalidad)->first();
        $cursos = Asignatura::where('modalidad_grupo_id', $modalidad_grupo->id)->get();
        $nro_cursos = $cursos->count();
        return(
            view('page.cursos',
                compact([
                    'cursos',
                    'universidad',
                    'grupos',
                    'nro_cursos'
                ])));
    }
    public function clases(Request $request, $universidad, $modalidad, $grupo, $curso){

        $asignatura = Asignatura::where('id', $curso)->first();
        $tema_1 = Tema::where('asignatura_id', $asignatura->id)->where('bloque', 1)->get();
        $tema_2 = Tema::where('asignatura_id', $asignatura->id)->where('bloque', 2)->get();
        $tema_3 = Tema::where('asignatura_id', $asignatura->id)->where('bloque', 3)->get();
        return(view('page.clases',
            compact([
                'asignatura',
                'tema_1',
                'tema_2',
                'tema_3'
            ])
        ));
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
