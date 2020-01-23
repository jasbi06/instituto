<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    protected $fillable = ['alumno', 'grupo'];
    public function alumnoObject() {
        return $this->belongsTo('App\User', 'alumno');
    }
}
