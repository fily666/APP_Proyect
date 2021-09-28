<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experto extends Model
{
    protected $fillable = [
        'name', 'categoria_id', 'detail'
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
