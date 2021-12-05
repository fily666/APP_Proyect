<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experto extends Model
{
    protected $fillable = [
        'id', 'title', 'categoria_id', 'detail'
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
