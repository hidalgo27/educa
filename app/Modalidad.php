<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modalidad extends Model
{
    protected $table = "modalidades";

    public function universidad()
    {
        //relacion de uno a muchos
        return $this->belongsTo(Universidad::class);
    }

    public function modalidad_grupos()
    {
        //relacion de uno a muchos
        return $this->hasMany(ModalidadGrupo::class);
    }
}
