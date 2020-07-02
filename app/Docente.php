<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docente extends Model
{

    protected $table = "docentes";

    public function docente()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
