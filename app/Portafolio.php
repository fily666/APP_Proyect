<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    protected $fillable = [
        'id', 'name', 'imagen', 'categoria_id', 'detail'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
