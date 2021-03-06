<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function projects(){
        return $this->belongsToMany('App\Project');
}

   public function images(){
        return $this->belongsToMany('App\Gallery','description_gallery','description_id');
    }

    public function materials(){
        return $this->belongsToMany('App\Material','material_description','description_id');
    }


}
