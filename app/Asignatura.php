<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asignatura extends Model
{
    protected $table = "asignaturas";
    //
    public function modalidad_grupo(){
        //relacion de uno a muchos
        return $this->belongsTo(ModalidadGrupo::class, 'modalidad_grupo_id');
    }
    public function docente()
    {
        return $this->belongsTo(User::class, 'f_docente_id');
    }
    public function temas(){
        //relacion de uno a muchos
        return $this->hasMany(Tema::class);
    }
    public function asignatura_examenes(){
        //relacion de uno a muchos
        return $this->hasMany(AsignaturaExamen::class);
    }
    public function imagen(){
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class,'imageable');
    }
}
