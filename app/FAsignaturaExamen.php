<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FAsignaturaExamen extends Model
{
    //
    public function f_asig_exam_pres()
    {
        return $this->hasMany(FAsigExaPre::class, 'f_asignatura_examen_id');
    }

    public function f_temas()
    {
        //relacion de muchos a muchos
        return $this->belongsToMany(FTema::class)->withTimesTamps();
    }

    public function f_asignatura()
    {
        //relacion de muchos a muchos
        return $this->belongsTo(FAsignatura::class, 'f_asignatura_id');
    }
}
