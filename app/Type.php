<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Type extends Model
{
   public function description(){
       return $this->belongsTo('App\Description');
   }
}
