<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Serie extends Model
{
    //

    public function projects(){
        return $this->hasOne('\App\Project');
    }
}
