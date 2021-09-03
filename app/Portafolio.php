<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    protected $fillable = [
        'name', 'imagen', 'etiquetas', 'detail'
    ];
}
