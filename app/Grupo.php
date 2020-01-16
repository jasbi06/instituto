<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    /**
     * Get the post that owns the comment.
     */
    public function anyoescolarObject()
    {
        return $this->belongsTo('App\Anyoescolar', 'anyoescolar');
    }
}
