<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    // relazione molti a uno con utenti "appartiene a"
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function descriptions()
    {
        return $this->belongsToMany('App\Description','description_project','project_id');
    }

    public function macro_categories()
    {
        return $this->hasOne('App\MacroCategory');
    }

    public function materials()
    {
        return $this->hasMany('App\Material');
    }





    public static function getPojectById($projID){
        return \App\Project::find($projID);
    }

    public static function getProjectBySlug($slug){
     return \App\Project::where('slug', '=', $slug);
    }

    public static function getCurrentProjectBySlug($slug){
        return \App\Project::where('slug', '=', $slug)->first();
    }

    public static function getProjectsByCateogory($cat){
        return \App\Project::where('macro_category_id', '=', $cat)->get();
    }

    public static function getProjectAuthor($projID){
        return \App\Project::find($projID)->user;
    }

    public static function getProjectTags($meta_keys){
        return explode(",",$meta_keys);
    }

}
