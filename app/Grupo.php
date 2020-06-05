<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    protected $table = "grupos";

    protected $fillable = [
        'descripcion', 'universidad_id',
    ];

    public function universidad()
    {
        //relacion de muchos a muchos
        return $this->belongsTo(Universidad::class);
    }
    public function carreras()
    {
        //relacion de muchos a muchos
        return $this->hasMany(Carrera::class);
    }

    public function imagen()
    {
        //relacion de uno a muchos
        return $this->morphOne(Imagen::class, 'imageable');
    }

    public function modalidad_grupos()
    {
        //relacion de uno a muchos
        return $this->hasMany(ModalidadGrupo::class);
    }
}
