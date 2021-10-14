<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'name', 'categoria_id', 'precio', 'detail'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
