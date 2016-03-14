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

    public function redirectToPage($page){
        return view('cosplaydesign.pages.'.$page);
    }

    /*
     * Get Project list by category
     */
    public function getListByCategory($slug)
    {
        $projects = collect();
        if ($slug != "tutti"){
            $currentMC = \App\MacroCategory::getCurrentMacroCategoryBySlug($slug);
            $_projects = \App\Project::getProjectsByCateogory($currentMC->id);
//dump($_projects);
        } else {
            $projects = \App\Project::All();
            $currentMC = collect();
            $currentMC->name = "tutti";
            $currentMC->fonticon = "fa-group";
        }

            foreach($_projects as $project){
                $project = \App\Project::getFullProjectData($project->id);
                $projects->push($project);
            }
        return view('cosplaydesign.pages.lista',compact("projects","currentMC"));
    }

    /*
     * get the full project data
     */
    public function getProjectData($slug){
            // get the current project by slug
            $currentProject = collect();
            $CP = \App\Project::getCurrentProjectBySlug($slug);
            $currentProject = \App\Project::getFullProjectData($CP->id);
            $currentProject->steps = $currentProject->descriptions;
            // get and associate the step images
            foreach($currentProject->steps as $step){
                $images = \App\Gallery::find($step->gallery_id);
                $step->images = $images;
            }
        return view('cosplaydesign.pages.progetto',array('currentProject'=>$currentProject));
    }






}