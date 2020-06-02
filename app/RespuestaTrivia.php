<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RespuestaTrivia extends Model
{
    //
    protected $table = "f_respuesta_trivias";
    public function pregunta_trivia()
    {
        //relacion de uno a muchos
        return $this->belongsTo(PreguntaTrivia::class, 'f_pregunta_trivia_id');
    }
    public function imagen()
    {
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class, 'imageable');
    }
}
