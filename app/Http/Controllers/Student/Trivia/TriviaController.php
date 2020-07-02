<?php

namespace App\Http\Controllers\Student\Trivia;

use App\Asignatura;
use App\AsignaturaGrupoUser;
use App\Http\Controllers\Controller;
use App\Modalidad;
use App\ModalidadGrupo;
use Illuminate\Http\Request;

class TriviaController extends Controller
{
    public function trivia_f(Request $request, $idsubtema, $idalumno){
        $request->user()->authorizeRoles(['user', 'admin']);
        $a_user_f = AsignaturaGrupoUser::where('user_id', $request->user()->id)->where('estado', 1)->get();

        $a_user_f_c =$a_user_f->count();

        if ($a_user_f_c > 0){
            foreach ($a_user_f as $a_user_fs){
                $modalidad_gf = ModalidadGrupo::where('id', $a_user_fs->modalidad_grupo_id)->first();
                $modalidad_f = Modalidad::where('id', $modalidad_gf->modalidad_id)->where('mostrar_web', 1)->first();
                if($modalidad_f){
                    $btn_a = 'false';
//                    $asignatura =Asignatura::with('temas.sub_temas','docente')->where('id',$curso)->where('modalidad_grupo_id', $modalidad_gf->id)->get();
//                    $modalidad_grupo_view = ModalidadGrupo::with('modalidad.universidad','grupo.universidad')->where('id', $modalidad_gf->id)->first();
                }else{
                    $btn_a = 'false';
                }
            }
        }

        if($a_user_f_c == 0) {
            $view_a = 'true';
            $form = 'true';
        }

        return response()->json(
            [
                'estado_btn' => [
                    'btn_a' => $btn_a,
                ]
            ]);

    }
}
