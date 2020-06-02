<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FPreguntaTrivia extends Model
{
    //
    protected $table = 'f_pregunta_trivias';
    public function f_respuesta_trivias()
    {
        return $this->hasMany(FRespuestaTrivia::class, 'f_pregunta_trivia_id');
    }
    public function f_imagen()
    {
        // hasMany polimorphico
        return $this->morphOne(FImagen::class, 'f_imageable');
    }
    public function f_sub_tema()
    {
        // hasMany polimorphico
        return $this->belongsTo(FSubTema::class, 'f_sub_tema_id');
    }
}
