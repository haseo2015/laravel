<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MacroCategory extends Model
{
    //
    protected $table = 'macro_categories';

    public function projects(){
        return $this->hasMany('App\Project','id');
    }

    public static function getCurrentMacroCategoryBySlug($slug){
        return \App\MacroCategory::where('slug', '=', $slug)->first();
    }

    public static function getCurrentMacroCategoryById($catID){
        return \App\MacroCategory::where('id', '=', $catID)->first();
    }

}
