<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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


    public function getAccessori(Request $request, $slug=NULL){

        if ($slug){
            $projects = \App\Project::all();
            $currentProject = \App\Project::where('slug', '=', $slug)->first();
            $descriptions = $currentProject->descriptions();

            dump($descriptions);





            return view('cosplaydesign.pages.progetto',['currentProject'=>$currentProject]);
        } else {
            return view('cosplaydesign.pages.accessori');
        }


}

    public function getCostumi($slug){
        return view('cosplaydesign.pages.progetto');
    }


    public function showDetail($slug){

        $projects = \App\Project::all();
        $currentProject = \App\Project::where('slug', '=', $slug)->first();
        //$descs = $currentProject->descriptions();

    //print_r( $descs );
//exit;


        return view('cosplaydesign.pages.progetto',['currentProject'=>$currentProject]);
    }

}