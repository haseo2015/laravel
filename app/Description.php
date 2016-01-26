<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function projects(){
        return $this->belongsToMany('App\Project');
    }

   /* public function galleries(){
        return $this->hasOne('App\Gallery','project_id','id');
    }
   */
}
