<?php

namespace App\Http\Controllers\Student;

use App\Asignatura;
use App\AsignaturaGrupoUser;
use App\Carrera;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\Modalidad;
use App\ModalidadGrupo;
use App\Universidad;
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

    public function getUniversidades(){
        $universidad =Universidad::all();
        $data = [];
//        $data[0] = [
//            'id' => 0,
//            'text' => 'Seleccione',
//        ];

        foreach ($universidad as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'text' => $value->nombre,
            ];
        }
        return response()->json($data);
    }
    public function getModalidad($id){
        $modalidad =Modalidad::where('universidad_id', $id)->get();
        $data = [];

        foreach ($modalidad as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'text' => $value->titulo,
            ];
        }
        return response()->json($data);
    }
    public function getGrupo($id){
        $grupo =Grupo::where('universidad_id', $id)->get();
        $data = [];

        foreach ($grupo as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'text' => $value->descripcion,
            ];
        }
        return response()->json($data);
    }
    public function getCarreras($id){
        $carrera =Carrera::where('grupo_id', $id)->get();
        $data = [];
        foreach ($carrera as $key => $value) {
            $data[$key] = [
                'id' => $value->id,
                'text' => $value->nombre,
            ];
        }
        return response()->json($data);
    }

    public function getCursos(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->get();

        if ($a_user_f){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gf->id)->get();
                }
            }
        }

        if ($a_user_p){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                if ($modalidad_p) {
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gp->id)->get();
                }
            }
        }



//        return response()->json($asignatura);
        return response()->json(
            [
                'estado_vista' => [
                    'asignatura' => $asignatura
                ]
            ]);
    }

    public function getmatricula(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->get();

        if ($a_user_f){
            foreach ($a_user_f as $a_user_fs) {
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if ($modalidad_f) {
                    $view_a = 'true';
                }
            }

            $form = 'false';
        }
        if ($a_user_p){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                if ($modalidad_p) {
                    $view_a = 'false';
                }
            }
            $form = 'false';
        }


        $a_user_p_c = $a_user_p->count();
        $a_user_f_c =$a_user_f->count();

        if($a_user_p_c == 0 AND $a_user_f_c == 0) {
            $view_a = 'true';
            $form = 'true';
        }

//        if ($view_a == 'true'){
//            $show_1 = 'true';
//        }


//        return response()->json($view_a);

        return response()->json(
            [
                'estado_vista' => [
                    'view_a' => $view_a,
                    'form' => $form,
                ]
            ]);

    }
    public function matricular(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        $modalidad_g = ModalidadGrupo::where('grupo_id', $request->grupoSelected)->where('modalidad_id', $request->modalidadSelected)->first();
        $matricula = new AsignaturaGrupoUser();
        $matricula->modalidad_grupo_id = $modalidad_g->id;
        $matricula->user_id = $request->user()->id;
        $matricula->estado = 1;
        $matricula->save();
//        $request->user()->id;


        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->where('modalidad_grupo_id', $modalidad_g->id)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->where('modalidad_grupo_id', $modalidad_g->id)->get();

        if ($a_user_f){
            foreach ($a_user_f as $a_user_fs) {
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if ($modalidad_f) {
                    $view_a = 'true';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gf->id)->get();
                }
            }

            $form = 'false';
        }
        if ($a_user_p){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                if ($modalidad_p) {
                    $view_a = 'false';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gp->id)->get();
                }
            }
            $form = 'false';
        }


        $a_user_p_c = $a_user_p->count();
        $a_user_f_c =$a_user_f->count();

        if($a_user_p_c == 0 AND $a_user_f_c == 0) {
            $view_a = 'true';
            $form = 'true';
        }

        return response()->json(
            [
                'estado_vista' => [
                    'view_a' => $view_a,
                    'form' => $form,
                    'asignatura' => $asignatura
                ]
            ]);
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
