<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immagine extends Model
{
    protected $table='immagini';

    public function nazione()
    {
        return $this->belongsTo('App\Nazioni','nazioni_id');
    }
}
