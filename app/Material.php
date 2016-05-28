<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Material extends Model
{
    public function descriptions()
    {
        return $this->belongsToMany('App\Description','material_description','description_id');
    }
}
