<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //
    public function descriptions(){
        return $this->belongsToMany('App\Description','description_gallery','description_id');
    }

    public static function getGalleryImages($galleryID){
        $pp = \App\Gallery::find($galleryID)->descriptions;
    }

}
