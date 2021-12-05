<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'id', 'title', 'duracion', 'categoria_id', 'precio', 'detail'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    public function cita()
    {
        return $this->belongsTo('App\Cita');
    }
}
