<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Carbon\Carbon;

class User extends Model
{

    /**
     * The database table used by the model.
     *
     * @var string
     */
   // protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    protected $dates = ['birthday','created_at', 'updated_at', 'deleted_at'];

    // definisce la relazione utente-Articoli uno a tanti.
    public function articles()
    {
        return $this->hasMany('App\Article');
    }

    public function details(){
        return $this->hasOne('App\UserDetails','user_id');
    }

    public function projects(){
        return $this->hasMany('App\Project', 'user_id');
    }


    public static function getUserDataBySlug($slug){
        return \App\User::where('slug_username','=',$slug)->first();
    }

    public static function getUserDetails($userId){
        return \App\User::find($userId)->details;
    }

    public static function getAllUserDataBySlug($slug){
        $dati = \App\User::where('slug_username','=',$slug)->first();
        $dati['details'] = $dati->details;
        $dati['details']->birthday = Carbon::parse($dati['details']->birthday)->format('d/m/Y');
        $dati['details']->avatar = "/profiles/".$dati['details']->avatar;
        //dump($dati);
        return $dati;
    }

    //###################################################
    // USER -> PROJECTS
    public static function getUsersProjects($userID){
        return \App\User::find($userID)->projects;
    }

}
