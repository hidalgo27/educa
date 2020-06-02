<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PreguntaTrivia extends Model
{
    //
    protected $table = "f_pregunta_trivias";
    public function sub_tema()
    {
        //relacion de uno a muchos
        return $this->belongsTo(SubTema::class);
    }
    public function respuesta_trivias()
    {
        //relacion de uno a muchos
        return $this->hasMany(RespuestaTrivia::class, 'f_pregunta_trivia_id');
    }
    public function asig_gru_user_pre_tri()
    {
        //relacion de uno a muchos
        return $this->hasMany(AsigGruUserPreTri::class);
    }
    public function imagen()
    {
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class, 'imageable');
    }
}
