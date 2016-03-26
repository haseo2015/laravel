<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use Carbon\Carbon;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    public function getMemberData($slug){
        $userdata = \App\User::getAllUserDataBySlug($slug);
        $_projects = \App\User::getUsersProjects($userdata->id);
        $friends = \App\Friends::getFriendsByUser($userdata->id);
       // dump($friends);
        $projects = collect();
        foreach($_projects as $project){
            $project = \App\Project::getFullProjectData($project->id);
            $projects->push($project);
        }
//dump($projects);
       return view('cosplaydesign.pages.profile',array("userdata" => $userdata,"projects" => $projects,"friends"=>$friends));
    }
}
