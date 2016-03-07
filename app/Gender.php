<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    public function projects()
    {
        return $this->belongsToMany('App\Project','project_gender','gender_id');
    }
}
