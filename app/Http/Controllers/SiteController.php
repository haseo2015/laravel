<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
DB::enableQueryLog();
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

    public function getCategoria(Request $request, $slug=null){
        return $this->getListByCategory($slug);
    }

    public function getAccessori(Request $request, $slug=null){
        return $this->getDataBySlug($slug);
    }

    public function getCostumi(Request $request, $slug=null){
         return $this->getDataBySlug($slug);
    }
    public function getArmi(Request $request, $slug){
        return $this->getDataBySlug($slug);
    }

    public function redirectToRight($slug){
        echo $slug;
    }

    public function showDetail($slug){

        $projects = \App\Project::all();
        $currentProject = \App\Project::where('slug', '=', $slug)->first();
        //$descs = $currentProject->descriptions();
    //print_r( $descs );
//exit;
        return view('cosplaydesign.pages.progetto',['currentProject'=>$currentProject]);
    }


    public function getListByCategory($slug)
    {
        if ($slug) {
            $mc = \App\MacroCategory::all();
            $currentMC = \App\MacroCategory::where('slug', '=', $slug)->first();

            $projects = DB::table('description_project')
                ->join('projects', 'projects.id', '=', 'description_project.project_id')
                ->leftjoin('descriptions', 'descriptions.id', '=', 'description_project.description_id')
                ->join('users', 'projects.user_id', '=', 'users.id')
                ->join('macro_categories', 'projects.macro_category_id', '=', 'macro_categories.id')
                ->select('macro_categories.id',
                    'macro_categories.name as macro_name',
                    'macro_categories.slug as macro_slug',
                    'macro_categories.category_color as macro_color',
                    'macro_categories.fonticon as macro_icon',
                    'projects.*', 'projects.slug as seo_url',
                    'descriptions.*',
                    'users.*')
                ->where('macro_categories.slug', '=', $slug)
                ->where('projects.published_at', '<=', 'NOW()')
                //->where('projects.is_published', '=', true)
                ->orderBy('projects.published_at', 'DESC')
                ->groupBy('projects.id')

                ->get();
        } else {
            $projects = DB::table('description_project')->distinct()
                ->join('projects', 'projects.id', '=', 'description_project.project_id')
                ->join('descriptions', 'descriptions.id', '=', 'description_project.description_id')
                ->join('users', 'projects.user_id', '=', 'users.id')
                ->join('macro_categories', 'projects.macro_category_id', '=', 'macro_categories.id')
                ->select('macro_categories.id',
                    'macro_categories.name as macro_name',
                    'macro_categories.slug as macro_slug',
                    'macro_categories.category_color as macro_color',
                    'macro_categories.fonticon as macro_icon',
                    'projects.*', 'projects.slug as seo_url',
                    'descriptions.*',
                    'users.*')
                ->groupBy('projects.id')
                //->where('macro_categories.slug', '=', $slug)
                ->get();
        }
        foreach($projects as $project){
            $knobColor = $this->generateKnobColor ($project->progress);
            $project->knobColor = $knobColor;
        }
        return view('cosplaydesign.pages.lista',["projects" => $projects]);
    }


    public function getDataBySlug($slug){


            $projects = \App\Project::all();
            $currentProject = \App\Project::where('slug', '=', $slug)->first();

        $datas = DB::table('description_project')->distinct()
            ->join('projects', 'projects.id', '=', 'description_project.project_id')
            ->join('descriptions', 'descriptions.id', '=', 'description_project.description_id')
            ->join('users', 'projects.user_id', '=', 'users.id')
            ->join('macro_categories', 'projects.macro_category_id', '=', 'macro_categories.id')
            ->select('macro_categories.id',
                'macro_categories.name as macro_name',
                'macro_categories.slug as macro_slug',
                'macro_categories.category_color as macro_color',
                'macro_categories.fonticon as macro_icon',
                'projects.*', 'projects.slug as seo_url',
                'descriptions.*',
                'users.*')
            ->groupBy('projects.id')
            ->where('projects.slug', '=', $slug)
            ->get();


            foreach($datas as $mydata){
                $knobColor = $this->generateKnobColor ($mydata->progress);
                $mydata->knobColor = $knobColor;
            }


            $mats = $this->getProjectMaterial($currentProject->id);
            $projectData = $datas;

            $steps = $this-> getTutorialStepByProjectId($currentProject->id);
            //dump($steps);
            $step_images = $this->getGalleryElementsByStepId($steps);
            return view('cosplaydesign.pages.progetto',compact('projectData', 'mats','steps'));
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