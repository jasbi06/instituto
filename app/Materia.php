<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model {
    protected $table = "materia";

    public function materiaImpartida() {
        return $this->hasMany('App\Materiaimpartida', "materia");
    }
    public function materiaMatriculada() {
        return $this->hasMany('App\Materiamatriculada', "materia");
    }
}
