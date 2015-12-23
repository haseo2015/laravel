<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // relazione molti a uno con utenti "appartiene a"
    public function user()
    {
    return $this->belongsTo('App\User');
    }

    // relazione molti a molti con le categorie
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
