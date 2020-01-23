<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{

    /*

    -- One To Many con modelo Grupo F.K. nivel
    -- One To Many con modelo Nivel F.K. nivelsuperior
    -- One To Many (Inverse) con modelo Nivel F.K. nivelsuperior
*/
    protected $table = 'niveles';

    protected $fillable = ['nombre','nivelsuperior'];

    public function grupos() {
        return $this->hasMany('\App\Grupo','nivel');
    }

    public function niveles() {
        return $this->hasMany('\App\Nivel','nivelsuperior');
    }

    public function nivelObject() {
        return $this->belongsTo('\App\Nivel','nivelsuperior');
    }
}
