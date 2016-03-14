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
    public function genders()
    {
        return $this->belongsToMany('App\Gender','project_gender','project_id');
    }

    public function macro_categories()
    {
        return $this->hasOne('App\MacroCategory');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Material','material_project','material_id');
    }


    //################################################
    // STATIC FUNCTIONS

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

    public static function getProjectGenders($projID){
        return \App\Project::find($projID)->genders;
    }

    public static function getProjectMaterials($projID){
        return \App\Project::find($projID)->materials;
    }

    public static function getProjectTags($meta_keys){
        return explode(",",$meta_keys);
    }

    public static function getProjectByUserId($userId){
        return \App\Project::all()->where("user_id","=",$userId);
    }

    public static function getTutorialStepByProjectId($projID){
        return \App\Project::find($projID)->descriptions;
    }

    public static function setKnobColor($progress=1) {
        $color = '';
        switch($progress){
            case ($progress <= 25):
                $color = "#DD2C00";
                break;
            case ($progress > 25 && $progress <= 50):
                $color = "#FF6D00";
                break;
            case ($progress > 50 && $progress <= 75):
                $color = "#FF6D00";
                break;
            case ($progress > 75 && $progress <= 90):
                $color = "#AEEA00";
                break;
            case ($progress > 90 && $progress <= 100):
                $color = "#64DD17";
                break;
        }
        return $color;
    }

    public static function getFullProjectData($projID){
        $myProject = collect();
        $currentProject = \App\Project::getPojectById($projID);
        $owner = \App\Project::getProjectAuthor($currentProject->id);
        $tags = \App\Project::getProjectTags($currentProject->meta_keys);
        $gender = \App\Project::getProjectGenders($currentProject->id);
        $materials = \App\Project::getProjectMaterials($currentProject->id);
        $knobColor = \App\Project::setKnobColor($currentProject->progress);

        $currentProject->fullname = $currentProject->name;
        $currentProject->name = str_limit($currentProject->name, $limit = 35, $end = '...');
        $currentProject->knobColor = $knobColor;
        $currentProject->directory = "/img/cd-". $currentProject->slug . "-12345678/";
        $currentProject->tags = $tags;
        $currentProject->owner = $owner;
        $currentProject->gender = $gender;
        $currentProject->materials = $materials;
        $currentProject->category = \App\MacroCategory::getCurrentMacroCategoryById($currentProject->macro_category_id);
        return $currentProject;
    }
}
