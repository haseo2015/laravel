<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App\Project','project_gender','gender_id');
    }




    public static function getGenderBySlug($slug){
        return \App\Gender::where("slug","=",$slug)->get();
    }


    public static function getProjectByGender(){}


    public static function getProjectsByGender($slug){
        $gender = \App\Gender::getGenderBySlug($slug)[0]->id;
        return \App\Gender::find($gender)->projects;

    }
}
