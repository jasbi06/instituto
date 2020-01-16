<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $table = 'niveles';
<<<<<<< HEAD

    public function niveles() {
        return $this->hasMany('\App\Nivel','nivelsuperior');
    }

    public function nivelPadre() {
        return $this->belongsTo('\App\Nivel','nivelsuperior');
    }


=======
>>>>>>> 6c9bfb4d2af4c1583f6da58fe88fb3f6fd924686
}
