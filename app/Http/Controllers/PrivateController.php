<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('cosplaydesign.private.pages.dashboard', compact('userData'));

    }

    public function getLogin()
    {
        return view('cosplaydesign.private.default');
    }

    public function getHome()
    {
        $userdata = \App\User::getAllUserDataBySlug("haseo-xth");
        $projectCompleted = \App\Project::getProjectbyUserIdAndStatus($userdata->id,1);
        $projectInProgress = \App\Project::getProjectbyUserIdAndStatus($userdata->id,0);
        $progettiArmi = \App\Project::getProjectsByCateogory(1,$userdata->id);
        $progettiAccessori = \App\Project::getProjectsByCateogory(2,$userdata->id);
        $progettiCostumi = \App\Project::getProjectsByCateogory(3,$userdata->id);
        $numeroAmici = \App\Friends::getFriendsByUser($userdata->id);
        //dump($projectInProgress);
        $numeroProgetti = collect();
        $numeroProgetti->armi = count($progettiArmi);
        $numeroProgetti->accessori = count($progettiAccessori);
        $numeroProgetti->costumi = count($progettiCostumi);
        $numeroMedia = \App\User::getMediaByUser($userdata->id);


        return view('cosplaydesign.private.pages.dashboard',compact('userdata','projectCompleted','projectInProgress','numeroProgetti','numeroAmici','numeroMedia'));
    }
}
