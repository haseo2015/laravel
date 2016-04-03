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

    public function media(){
        return $this->hasManyThrough('App\Media','App\Project','user_id','project_id');
    }

    public static function getAllUserDataById($userId){
        //echo $userId . "| ";

        $dati = \App\User::where('id','=',$userId)->first();
        $dati['details'] = $dati->details;
        if ($dati['details'] !== null){
            $dati['details']->birthday = Carbon::parse($dati['details']->birthday)->format('d/m/Y');
            $dati['details']->avatar = !empty($dati['details']->avatar) ? "/profiles/".$dati['details']->avatar : 'http://www.placehold.it/150/';
        } else {
            $dati['details']= collect();
            $dati['details']->avatar = 'http://www.placehold.it/150/';
        }

//dump($dati);
         return $dati;
    }

    public static function getAllUserDataBySlug($slug){
        $dati = \App\User::where('slug_username','=',$slug)->first();
        $dati['details'] = $dati->details;
        $dati['details']->birthday = Carbon::parse($dati['details']->birthday)->format('d/m/Y');
        $dati['details']->avatar = !empty($dati['details']->avatar) ? "/profiles/".$dati['details']->avatar : 'http://www.placehold.it/150/';
        //dump($dati);
        return $dati;
    }

    public static function getMediaByUser($userId){
        return \App\User::find($userId)->media;
    }



    //###################################################
    // USER -> PROJECTS
    public static function getUsersProjects($userID){
        return \App\User::find($userID)->projects;
    }

}
