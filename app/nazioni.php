<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nazioni extends Model
{
    //
    protected $table='nazioni';

    public function immagini()
    {
        return $this->hasMany('App\Immagine','nazioni_id');
    }
}
