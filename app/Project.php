<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Description;

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
        return $this->belongsToMany('App\Gender','project_gender','project_id')->withPivot('gender_id');
    }

    public function macro_categories()
    {
        return $this->hasOne('App\MacroCategory');
    }

    public function materials()
    {
        return $this->belongsToMany('App\Material','material_project','material_id');
    }

    public function series(){
        return $this->belongsTo('\App\Serie','serie_id');
    }

    public function documents(){
        return $this->hasMany('\App\Document','project_id');
    }

    public function media(){
        return $this->hasMany('\App\Media','project_id');
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

    public static function getProjectAuthor($projID){
        return \App\Project::find($projID)->user;
    }

    public static function getProjectGenders($projID){
        return \App\Project::find($projID)->genders;
    }

    public static function getProjectMaterials($projID){
        return \App\Project::find($projID)->materials;
    }

    public static function getProjectSerie($projID){
       return \App\Project::find($projID)->series;
    }

    public static function getProjectDocuments($projID){
        return \App\Project::find($projID)->documents;
    }

    public static function getProjectMedia($projID){
        return \App\Project::find($projID)->media;
    }

    public static function getProjectTags($meta_keys){
        $metas = collect();
        $tmp_metas =  explode(",",$meta_keys);
        foreach($tmp_metas as $meta)
            $metas->push($meta);
        return $metas;
    }

    public static function getProjectByUserId($userId){
        return \App\Project::all()->where("user_id","=",$userId)
            ->where('published_at', '<=', 'NOW()')
            ->where('is_published', '=', true);
    }

    public static function getProjectsByCateogory($cat){
        return \App\Project::where('macro_category_id', '=', $cat)
            ->where('published_at', '<=', 'NOW()')
            ->where('is_published', '=', true)
            ->orderBy('name')
            ->paginate(10);
    }


    public static function getProjectsByGender($gender){
        $baseProjects =  \App\Gender::getProjectsByGender($gender);
        $projectsComplete = collect();
        foreach($baseProjects as $project){
            $progetto = \App\Project::getFullProjectData($project->id);
            $projectsComplete->push($progetto);
        }
        return $projectsComplete;

    }

    public static function getRelatedProjects($currentProject){
        //dump($currentProject);
        $idcategoria = $currentProject->category->id;
        $categoriaSlug = $currentProject->category->slug;
        $idgenere = $currentProject->gender[0]->id;
        $genereSlug = $currentProject->gender[0]->slug;

        $baseProjects = \App\Project::where("serie_id","=",$currentProject->serie_id)
                                    ->where("id","!=",$currentProject->id)
                                    ->where('published_at', '<=', 'NOW()')
                                    ->where('is_published', '=', true)
                                    ->orderByRaw('RAND()')
                                    ->paginate(4);
       if( count($baseProjects) === 0 ){
           $baseProjects = \App\Project::where("macro_category_id","=",$currentProject->macro_category_id)
               ->where("id","!=",$currentProject->id)
               ->where('published_at', '<=', 'NOW()')
               ->where('is_published', '=', true)
               ->orderByRaw('RAND()')
               ->paginate(4);
       }

        $projectsComplete = collect();
        foreach($baseProjects as $project){
            $progetto = \App\Project::getFullProjectData($project->id);
            $projectsComplete->push($progetto);
        }
        return $projectsComplete;
    }

    public static function getTutorialStepByProjectId($projID){
        $steps = \App\Project::find($projID)->descriptions
            ->sortBy('step');

       foreach($steps as $step){
           $images = \App\Description::find($step->id)->images;
           $step->images = $images;
       }
        //dump($steps);
        return $steps;
    }
    /*
     * Set KnobColor:
     *
     */
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

    public static function percent2Color($value,$brightness = 255, $max = 100,$min = 0, $thirdColorHex = '00')
    {
        // Calculate first and second color (Inverse relationship)
        $first = (1-($value/$max))*$brightness;
        $second = ($value/$max)*$brightness;

        // Find the influence of the middle color (yellow if 1st and 2nd are red and green)
        $diff = abs($first-$second);
        $influence = ($brightness-$diff)/2;
        $first = intval($first + $influence);
        $second = intval($second + $influence);

        // Convert to HEX, format and return
        $firstHex = str_pad(dechex($first),2,0,STR_PAD_LEFT);
        $secondHex = str_pad(dechex($second),2,0,STR_PAD_LEFT);

        return "#".$firstHex . $secondHex . $thirdColorHex ;

        // alternatives:
        // return $thirdColorHex . $firstHex . $secondHex;
        // return $firstHex . $thirdColorHex . $secondHex;

    }

    public static function getFullProjectData($projID){
        $myProject = collect();
        $currentProject = \App\Project::getPojectById($projID);
        $owner = \App\Project::getProjectAuthor($currentProject->id);
        $tags = \App\Project::getProjectTags($currentProject->meta_keys);
        $gender = \App\Project::getProjectGenders($currentProject->id);
        $materials = \App\Project::getProjectMaterials($currentProject->id);
        $knobColor = \App\Project::percent2Color($currentProject->progress);
        $steps = \App\Project::getTutorialStepByProjectId($currentProject->id);
        $serie = \App\Project::getProjectSerie($currentProject->id);
        $documents = \App\Project::getProjectDocuments($currentProject->id);
        $media = \App\Project::getProjectMedia($currentProject->id);

        $currentProject->fullname = $currentProject->name;
        $currentProject->name = str_limit($currentProject->name, $limit = 35, $end = '...');
        $currentProject->knobColor = $knobColor;
        $currentProject->directory = "/img/cd-". $currentProject->slug . "-12345678/";
        $currentProject->category = \App\MacroCategory::getCurrentMacroCategoryById($currentProject->macro_category_id);
        $currentProject->serie = $serie;
        $currentProject->tags = $tags;
        $currentProject->owner = $owner;
        $currentProject->gender = $gender;
        $currentProject->materials = $materials;
        $currentProject->steps = $steps;
        $currentProject->media = $media;
        $currentProject->documents = $documents;
        return $currentProject;
    }
}
