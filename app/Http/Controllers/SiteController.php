<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {
        //
        return view('cosplaydesign.pages.home');
    }


    public function getListByCategory($slug)
    {
        if ($slug != "tutti"){
            $currentMC = \App\MacroCategory::getCurrentMacroCategoryBySlug($slug);
//$pippo = \App\MacroCategory->projectByCat($currentMC->id);
            $projects = \App\Project::getProjectsByCateogory($currentMC->id);
//dump($projects);
        } else {
            $projects = \App\Project::All();
            $currentMC = collect();
            $currentMC->name = "tutti";
            $currentMC->fonticon = "fa-group";
        }
            foreach($projects as $project){
//dump($project);
                $owner = \App\Project::getProjectAuthor($project->id);
                $tags = \App\Project::getProjectTags($project->meta_keys);
                $knobColor = $this->generateKnobColor ($project->progress);
                $project->knobColor = $knobColor;
                $project->directory = "/img/cd-". $project->slug . "-12345678/";
                $project->tags = $tags;
                $project->owner = $owner;
                $project->category = \App\MacroCategory::getCurrentMacroCategoryById($project->macro_category_id);
            }

        return view('cosplaydesign.pages.lista',compact("projects","currentMC"));
    }


    public function getDataBySlug($slug){
            // get the current project by slug
            $projects = \App\Project::all();
            $currentProject = \App\Project::getCurrentProjectBySlug($slug);
//dump($currentProject->id);
            // get the knob percentage color
            $knobColor = $this->generateKnobColor ($currentProject->progress);
            // get the project owner
            $ownerData = $currentProject->user;
//dump($ownerData);
            // get the project steps
            $steps = $currentProject->descriptions;
//dump($steps);
            // get the project materials
            $materials = $this->getProjectMaterial($currentProject->id);
            // get and associate the step images
            foreach($steps as $step){
//dump($step->gallery_id);
                $images = \App\Gallery::find($step->gallery_id);
//dump($images);
                $step->images = $images;
            }

        // set the relative data to the project
        $currentProject->user = $ownerData;
        $currentProject->materials = $materials;
        $currentProject->steps = $steps;
        $currentProject->knobColor = $knobColor;
        $currentProject->materials = $this->getProjectMaterial($currentProject->id);
        $currentProject->directory =  "img/cd-".$currentProject->slug."-12345678/"; // da definire

        return view('cosplaydesign.pages.progetto',compact('currentProject'));
    }



    private function generateKnobColor($progress=1) {
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


    private function getProjectMaterial($proj_id){
        $mats = DB::table('material_project')->distinct()
            ->leftjoin('projects', 'projects.id', '=', 'material_project.project_id')
            ->leftjoin('materials', 'materials.id', '=', 'material_project.material_id')
            ->select('materials.*')
            ->where('material_project.project_id', '=', $proj_id)
            ->get();

        //dump($mats);
        return $mats;
    }

    private function getTutorialStepByProjectId($proj_id){

        $steps = DB::table('description_project')
            ->leftjoin('descriptions', 'descriptions.id', '=', 'description_project.description_id')
            ->select('descriptions.*')
            ->where('description_project.project_id', '=', 10)
        ->get();
        //dump($steps);
        return $steps;
    }

    public function getGalleryElementsByStepId($steps){
        //dump($steps);
        foreach($steps as $step){
            $elements = \App\Gallery::find($step->gallery_id);
            //dump($elements);
        }
        //
        //
    }

}