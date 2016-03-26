<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Serie extends Model
{
    //

    public function projects(){
        return $this->hasOne('\App\Project');
    }

    public static function getSeriesIdBySlug($slug){
        return \App\Serie::where("serie_slug","=",$slug)->first();
    }
}
