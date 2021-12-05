<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
    protected $fillable = [
        'id', 'categoria_id', 'title', 'resourceId', 'start', 'end'
    ];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'categoria_id', 'id');
    }
    public function servicio()
    {
        return $this->belongsTo('App\Servicio', 'title', 'id');
    }

    public function experto()
    {
        return $this->belongsTo('App\Experto', 'resourceId', 'id');
    }
}
