<?php

namespace App\Http\Controllers\Student;

use App\Asignatura;
use App\AsignaturaGrupoUser;
use App\Carrera;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\Modalidad;
use App\ModalidadGrupo;
use App\SubTema;
use App\Tema;
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

//        $modalidad = Modalidad::where('mostrar_web',1)->get();
//
//        $asignatura_grupo_user = AsignaturaGrupoUser::where('user_id', $request->user()->id)->get();
//
////        foreach ($modalidad as $modalidades) {
////            echo $modalidades->id;
////        }


        $request->user()->authorizeRoles(['user', 'admin']);

        return view('student.home');
    }

    public function getUniversidades(){
        $universidad =Universidad::all();
//        $data =Universidad::all()->pluck('id', 'nombre')->toArray();
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

        $a_user_p_c = $a_user_p->count();
        $a_user_f_c =$a_user_f->count();

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $form = 'false';
                    $view_a = 'true';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gf->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gf->id)->first();
                }else{
                    $form = 'true';
                    $view_a = 'true';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }

        if ($a_user_p_c > 0){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                $modalidad_count = $modalidad_p->count();

                if ($modalidad_count > 0) {
                    $form = 'false';
                    $view_a = 'false';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gp->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gp->id)->first();
                }else{
                    $form = 'true';
                    $view_a = 'true';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }



        if($a_user_p_c == 0 AND $a_user_f_c == 0) {
            $view_a = 'true';
            $form = 'true';
            $asignatura = 'false';
            $modalidad_grupo_view ='false';
        }



//        return response()->json($asignatura);
        return response()->json(
            [
                'estado_vista' => [
                    'form' => $form,
                    'view_a' => $view_a,
                    'asignatura' => $asignatura,
                    'modalidad_view' => $modalidad_grupo_view
                ]
            ]);
    }

    public function getmatricula(Request $request){
        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->get();

        $a_user_p_c = $a_user_p->count();
        $a_user_f_c =$a_user_f->count();

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs) {
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if ($modalidad_f) {
                    $view_a = 'true';
                }else{
                    $view_a = 'true';
                }
            }

            $form = 'false';
        }
        if ($a_user_p_c > 0){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                if ($modalidad_p) {
                    $view_a = 'false';
                }else{
                    $view_a = 'true';
                }
            }
            $form = 'false';
        }




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


        $a_user_p_c = $a_user_p->count();
        $a_user_f_c =$a_user_f->count();

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $form = 'false';
                    $view_a = 'true';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gf->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gf->id)->first();
                }else{
                    $form = 'true';
                    $view_a = 'true';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }

        if ($a_user_p_c > 0){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                $modalidad_count = $modalidad_p->count();

                if ($modalidad_count > 0) {
                    $form = 'false';
                    $view_a = 'false';
                    $asignatura =Asignatura::where('modalidad_grupo_id', $modalidad_gp->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gp->id)->first();
                }else{
                    $form = 'true';
                    $view_a = 'true';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }



        if($a_user_p_c == 0 AND $a_user_f_c == 0) {
            $view_a = 'true';
            $form = 'true';
            $asignatura = 'false';
            $modalidad_grupo_view ='false';
        }

        return response()->json(
            [
                'estado_vista' => [
                    'form' => $form,
                    'view_a' => $view_a,
                    'asignatura' => $asignatura,
                    'modalidad_view' => $modalidad_grupo_view
                ]
            ]);

    }

    public function video(Request $request, $idcurso, $idvideo){
        return view('student.video', compact('idcurso', 'idvideo'));
    }

    public function videolist(Request $request, $idcurso){
        return view('student.videoList', compact('idcurso'));
    }

    public function getCursosAlumno(Request $request, $curso) {

        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->get();

        $a_user_f_c = $a_user_f->count();
        $a_user_p_c = $a_user_p->count();

        if (($a_user_f_c == 0 AND $a_user_p_c == 0) OR $a_user_f_c == 0 OR $a_user_p_c == 0){
            $view_a = 'false';
            $view_p = 'false';
            $asignatura = 'false';
            $modalidad_grupo_view = 'false';
        }

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $view_a = 'true';
                    $asignatura =Asignatura::with('temas.sub_temas','docente')->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gf->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gf->id)->first();
                }else{
                    $view_a = 'false';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }

        if ($a_user_p_c > 0){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                $modalidad_count = $modalidad_p->count();

                if ($modalidad_count > 0) {
                    $view_p = 'true';
                    $asignatura =Asignatura::with('temas.sub_temas','docente')->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gp->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gp->id)->first();
                }else{
                    $view_p = 'false';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }

        return response()->json(
            [

                    'view_a'=>$view_a,
                    'view_p'=>$view_p,

                'asignatura'=>$asignatura,
                'modalidad_grupo'=>$modalidad_grupo_view,

            ]
        );

    }

    public function getCursosAlumnoVideo(Request $request, $curso, $video) {

        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();
        $a_user_p = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 2)->get();

        $a_user_f_c = $a_user_f->count();
        $a_user_p_c = $a_user_p->count();

        if (($a_user_f_c == 0 AND $a_user_p_c == 0) OR $a_user_f_c == 0 OR $a_user_p_c == 0){
            $view_a = 'false';
            $view_p = 'false';
            $asignatura = 'false';
            $modalidad_grupo_view = 'false';
        }

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $view_a = 'true';
                    $asignatura =Asignatura::with(['temas.sub_temas'=>function ($query) use ($video) {
                        $query->where('id', $video);
                    }, 'docente'])->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gf->id)->get();
                    $asignatura_all =Asignatura::with('temas.sub_temas','docente')->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gf->id)->get();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gf->id)->first();
                    $subtema = SubTema::where('id', $video)->get();
                }else{
                    $view_a = 'false';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                    $asignatura_all = 'false';
                    $subtema = 'false';
                }
            }
        }

        if ($a_user_p_c > 0){
            foreach ($a_user_p as $a_user_ps) {
                $modalidad_gp = ModalidadGrupo::where('id', $a_user_ps->modalidad_grupo_id)->first();
                $modalidad_p = Modalidad::where('id', $modalidad_gp->modalidad_id)->where('mostrar_web', 1)->first();

                $modalidad_count = $modalidad_p->count();

                if ($modalidad_count > 0) {
                    $view_p = 'true';
                    $asignatura =Asignatura::with('temas.sub_temas','docente')->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gp->id)->first();
                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gp->id)->first();
                }else{
                    $view_p = 'false';
                    $asignatura = 'false';
                    $modalidad_grupo_view = 'false';
                }
            }
        }

        return response()->json(
            [

                    'view_a'=>$view_a,
                    'view_p'=>$view_p,

                'asignatura'=>$asignatura,
                'asignatura_all'=>$asignatura_all,
//                'subtema'=>$subtema,
                'modalidad_grupo'=>$modalidad_grupo_view,

            ]
        );

    }

    public function profile(){
        return view('student.profile');
    }

    public function suscripcion(){
        return view('student.suscripcion');
    }





}
