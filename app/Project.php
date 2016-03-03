<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    // relazione molti a uno con utenti "appartiene a"
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function descriptions()
    {
        return $this->belongsToMany('App\Description','description_project','project_id');
    }

    public function macro_categories()
    {
        return $this->hasOne('App\MacroCategory');
    }

    public function materials()
    {
        return $this->hasMany('App\Material');
    }

/*
    public function types(){
        return $this->belongsToMany('App\Type');
    }
*/
}
