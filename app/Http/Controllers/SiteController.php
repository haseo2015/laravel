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
            // echo $currentMC;
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
                ->where('macro_categories.slug', '=', $slug)
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
            $datas = DB::table('description_project')
                ->join('projects', 'projects.id', '=', 'description_project.project_id')
                ->join('descriptions', 'descriptions.id', '=', 'description_project.description_id')
                ->join('users', 'projects.user_id', '=', 'users.id')
                ->select('projects.*', 'descriptions.*', 'users.*')
                ->where('slug', '=', $slug)
                ->get();
            foreach($datas as $mydata){
                $knobColor = $this->generateKnobColor ($mydata->progress);
                $mydata->knobColor = $knobColor;
            }
            // dump($datas);
            return view('cosplaydesign.pages.progetto',["projectData" => $datas]);
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
}