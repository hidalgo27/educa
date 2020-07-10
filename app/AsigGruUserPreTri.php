<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsigGruUserPreTri extends Model
{
    //
    protected $table = 'asig_gru_user_pre_tris';
    public function pregunta_trivia()
    {
        //relacion de uno a muchos
        return $this->belongsTo(PreguntaTrivia::class);
    }
    public function asig_gru_user()
    {
        //relacion de uno a muchos
        return $this->belongsTo(AsignaturaGrupoUser::class);
    }
}
