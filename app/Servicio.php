<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    protected $fillable = [
        'name', 'categoria', 'precio', 'detail'
    ];
}
