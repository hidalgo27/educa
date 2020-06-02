<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaRespuesta extends Model
{
    //
    public function pregunta()
    {
        //relacion de uno a muchos
        return $this->belongsTo(Pregunta::class);
    }
    public function asignatura_grupo_user()
    {
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
}
