<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materiaimpartida extends Model
{
    protected $table = 'materiasimpartidas';

    public function userObject() {
        return $this->belongsTo('\App\User','id','docente');
    }

    public function grupoObject() {
        return $this->belongsTo('\App\Grupo','id','grupo');
    }

    public function materiaObject() {
        return $this->belongsTo('\App\Materia','id','materia');
    }
}
