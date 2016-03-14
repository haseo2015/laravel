<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    protected $table = 'user_detail';

    public function users(){
        $this->belongsTo('\App\User');
    }
}
