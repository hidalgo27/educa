<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    protected $table = "carreras";

    protected $fillable = [
        'nombre', 'grupo_id',
    ];
    //
    public function grupo(){
        //relacion de muchos a muchos
        return $this->belongsTo(Grupo::class);
    }
}
