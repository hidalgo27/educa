<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FTema extends Model
{
    //
    public function f_sub_temas()
    {
        return $this->hasMany(FSubTema::class, 'f_tema_id');
    }
    public function f_asiganturas_examenes()
    {
        //relacion de muchos a muchos
        return $this->belongsToMany(FAsignaturaExamen::class)->withTimesTamps();
    }
    public function f_asignatura()
    {
        //relacion de muchos a muchos
        return $this->belongsTo(FAsignatura::class, 'f_asignatura_id');
    }
}
