<?php

namespace App\Http\Controllers\Student\Trivia;

use App\AsigGruUserPreTri;
use App\Asignatura;
use App\AsignaturaGrupoUser;
use App\Http\Controllers\Controller;
use App\Modalidad;
use App\ModalidadGrupo;
use App\PreguntaTrivia;
use App\SubTema;
use App\Tema;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TriviaController extends Controller
{
    public function trivia_f(Request $request, $idsubtema, $user_id)
    {
        $request->user()->authorizeRoles(['user', 'admin']);
        // Obtenemos la variable que representa la matricula del subtema que se esta viendo
        $subTema = SubTema::findOrFail($idsubtema);
        $tema = Tema::findOrFail($subTema->tema_id);
        $asignatura = Asignatura::findOrFail($tema->asignatura_id);
        $modalidad_grupo = Tema::findOrFail($asignatura->modalidad_grupo_id);
        $matricula_id =  AsignaturaGrupoUser::where('modalidad_grupo_id', $asignatura->modalidad_grupo_id)
            ->where('user_id', $user_id)->get()->first()->id;
        // Preguntamos si el alumno tiene sus trivias, sino tiene se le creara
        // $nro_trivias = AsigGruUserPreTri::where('asingatura_grupo_user_id', $matricula_id)->get()->count();
        // $trivias = null;
        $trivias = PreguntaTrivia::with('respuesta_trivias')->where('sub_tema_id', $idsubtema)->get();

        // $mis_trivias = AsigGruUserPreTri::where('asingatura_grupo_user_id', $matricula_id)->get();
        // creamos un json para retornar las trivias con las respuestas del alumno
        $preguntas = [];
        foreach ($trivias as $key => $trivia) {
            $rpt = -1;
            $rpt_alumno = -1;
            $respuestas = [];
            $habilitado = false;
            foreach ($trivia->respuesta_trivias as $key_r => $respuesta) {
                if (AsigGruUserPreTri::where('asingatura_grupo_user_id', $matricula_id)->where('pregunta_trivia_id', $trivia->id)->where('respuesta_trivia_id', $respuesta->id)->count() > 0) { {
                        $rpt_alumno = $key_r;
                        $habilitado =  true;
                    }
                }
                $respuestas[] = array('id' => $respuesta->id, 'titulo' => $respuesta->titulo, 'rpt_pos' => $key_r, 'correcta' => $respuesta->correcta, 'imagen' => $respuesta->imagen);
            }
            $preguntas[] = array('id' => $trivia->id, 'habilitado' => $habilitado, 'titulo' => $trivia->titulo, 'rpt_pos' => $trivia->correcta, 'rpt_alumno' => $rpt_alumno, 'imagen' => $trivia->imagen, 'respuestas' => $respuestas);
        }
        return json_encode($preguntas);
    }
    public function trivia_respuesta(Request $request, $idsubtema, $user_id)
    {

        $request->user()->authorizeRoles(['user', 'admin']);
        // Obtenemos la variable que representa la matricula del subtema que se esta viendo
        $subTema = SubTema::findOrFail($idsubtema);
        $tema = Tema::findOrFail($subTema->tema_id);
        $asignatura = Asignatura::findOrFail($tema->asignatura_id);
        $modalidad_grupo = Tema::findOrFail($asignatura->modalidad_grupo_id);
        $matricula_id =  AsignaturaGrupoUser::where('modalidad_grupo_id', $asignatura->modalidad_grupo_id)
            ->where('user_id', $user_id)->get()->first()->id;


        $pregunta_trivia_id = $request->id;
        $rpt_pos = $request->rpt_alumnor;
        $respuestas = $request->respuestas;
        $respuesta_trivia_id = 0;
        foreach ($respuestas as $respuesta) {
            if ($rpt_pos == $respuesta['rpt_pos']) {
                $respuesta_trivia_id = $respuesta['id'];
                break;
            }
        }
        if ($respuesta_trivia_id > 0) {
            $p_r = AsigGruUserPreTri::where('asingatura_grupo_user_id', $matricula_id)
                ->where('pregunta_trivia_id', $pregunta_trivia_id)->get();
            //return $p_r;
            $obj = null;
            if (count($p_r) == 0) {
                $obj = new AsigGruUserPreTri();
                $obj->asingatura_grupo_user_id = $matricula_id;
                $obj->pregunta_trivia_id = $pregunta_trivia_id;
                $obj->respuesta_trivia_id = $respuesta_trivia_id;
                $obj->puntaje = 0;
                $obj->save();
            } else {
                $obj = AsigGruUserPreTri::findOrFail($p_r->first()->id);
                $obj->asingatura_grupo_user_id = $matricula_id;
                $obj->respuesta_trivia_id = $respuesta_trivia_id;
                $obj->save();
            }

            $trivia = PreguntaTrivia::with(['imagen', 'respuesta_trivias'])->where('id', $pregunta_trivia_id)->get()->first();
            $rpt = -1;
            $rpt_alumno = -1;
            $respuestas = null;
            $preguntas = [];
            $habilitado = true;
            foreach ($trivia->respuesta_trivias as $key_r => $respuesta) {
                if (AsigGruUserPreTri::where('asingatura_grupo_user_id', $matricula_id)->where('pregunta_trivia_id', $pregunta_trivia_id)->where('respuesta_trivia_id', $respuesta->id)->count() > 0) { {
                        $rpt_alumno = $key_r;
                    }
                }
                $respuestas[] = array('id' => $respuesta->id, 'titulo' => $respuesta->titulo, 'rpt_pos' => $key_r, 'correcta' => $respuesta->correcta, 'imagen' => $respuesta->imagen);
            }
            $preguntas[] = array('id' => $trivia->id, 'habilitado' => $habilitado, 'titulo' => $trivia->titulo, 'rpt_pos' => $trivia->correcta, 'rpt_alumno' => $rpt_alumno, 'imagen' => $trivia->imagen, 'respuestas' => $respuestas);

            return json_encode($preguntas);

            // return response()->json(['estado' => 1]);
        } else {

            return json_encode(null);
        }
    }
    public function get_imagen($filename)
    {
        //dd($filename);
        if (!Storage::disk('trivias')->exists($filename)) abort(404);
        $file = Storage::disk('trivias')->get($filename);
        return response($file, 200);
    }
}
