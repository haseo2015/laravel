<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    // relazione molti a molti con gli articoli
    public function articles()
    {
        return $this->belongsToMany('App\Article');
    }
}
