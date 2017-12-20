<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use App\Nazioni;

class Immagine extends Model
{
    protected $table='immagini';

    public function nazione()
    {
        return $this->belongsTo('App\Nazioni','nazioni_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function($Immagine) {
            Storage::disk('public')->delete($Immagine->indirizzo);
            $nazione=Nazioni::where('sfondo',$Immagine->indirizzo)->update(['sfondo' => null]);
            $nazione=Nazioni::where('mappa',$Immagine->indirizzo)->update(['mappa' => null]);
        });
    }
}
