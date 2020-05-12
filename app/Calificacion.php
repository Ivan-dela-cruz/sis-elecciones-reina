<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
    protected $table='calificacions';

    public function user()
    {
        return $this->belongsTo('App\User','id_jurado');
    }

    public function candidata()
    {
        return $this->belongsTo('App\Candidata','id_candidata');
    }
}
