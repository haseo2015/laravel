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
     * Get Project list by gender
     */
    public function getListByGender($slug)
    {
        $currentMC = collect();
        $currentMC->name = \App\Gender::getGenderBySlug($slug)[0]->gender;
        $currentMC->fonticon = "";
        $projects = \App\Project::getProjectsByGender($slug);
//dump($currentMC);
        return view('cosplaydesign.pages.lista',compact("projects","currentMC"));
    }

    /*
     * GetListBySeries
     */
    public function getListBySeries($slug){
        $serie = \App\Serie::getSeriesIdBySlug($slug);
        $projects = \App\Project::getProjectsBySeriesId($serie);
        $currentMC = collect();
        $currentMC->name = $serie->serie_name;
        $currentMC->fonticon = "";
//dump($serie);
        return view('cosplaydesign.pages.lista',compact("projects","currentMC"));
    }
    /*
     * get the full project data
     */
    public function getProjectData($slug){
            // get the current project by slug
            $currentProject = collect();
            $projectID = \App\Project::getCurrentProjectBySlug($slug)->id;
            $fullData = \App\Project::getFullProjectData($projectID);
            $relatedProjects = \App\Project::getRelatedProjects($fullData);
           // dump($fullData);
        return view('cosplaydesign.pages.progetto',array('currentProject'=>$fullData,'related'=>$relatedProjects));
    }



}