<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MacroCategory extends Model
{
    //
    protected $table = 'macro_categories';

    public function project(){
        return $this->hasOne('App\Project');
    }
}
