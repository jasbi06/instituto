<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FaltaProfesor extends Model
{
    protected $table = 'faltasprofesores';
    protected $fillable = ['profesor_falta', 'profesor_guardia', 'periodoclase_id'];
    /**
     * Get the periodos the time of the journey
     */
    public function periodoclaseObject()
    {
        return $this->belongsTo('App\Periodosclase', 'FaltaProfesor');
    }

    /**
     * Get the coordinador who leave the class
     */
    public function profesorfaltaObject()
    {
        return $this->belongsTo('App\User', 'profesor_falta');
    }

    /**
     * Get the professor who tke cares the class
     */
    public function profesorguardiaObject()
    {
        return $this->belongsTo('App\User', 'profesor_guardia');
    }

}
