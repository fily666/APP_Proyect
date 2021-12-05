<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
   protected $fillable = [
      'id', 'name'
   ];

   public function cita()
   {
      return $this->belongsTo('App\Cita');
   }

   public function servicio()
   {
      return $this->belongsTo('App\Servicio');
   }

   public function experto()
   {
      return $this->belongsTo('App\Experto');
   }

   public function Portafolio()
   {
      return $this->belongsTo('App\Portafolio');
   }
}
