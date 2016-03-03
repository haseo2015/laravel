<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    public function galleries(){
        return $this->belongsTo('App\Description','gallery_id');
    }
}
