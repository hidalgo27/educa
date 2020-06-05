<?php

namespace App\Http\Controllers\Student;

use App\Carrera;
use App\Grupo;
use App\Http\Controllers\Controller;
use App\Modalidad;
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
