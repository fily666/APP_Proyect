<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experto extends Model
{
    protected $fillable = [
        'name', 'profesion', 'detail'
    ];
}
