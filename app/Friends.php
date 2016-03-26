<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Friends extends Model
{
    //
    protected $table = 'user_relations';


    public static function getFriendsByUser($userId){
        $_friends = \App\Friends::where("user_id","=",$userId)->get();
       // dump($friendsIds);
        $friends = collect();
        foreach($_friends as $friend){
            $userdata = \App\User::getAllUserDataById($friend->friend_user_id);
            $userdata->friendStatus = \App\Friends::getFriendStatus($friend->status);

            $friends->push($userdata);
        }
        //dump($friends);
        return $friends;
    }




    public static function getFriendStatus($statusId){
        switch($statusId){
            case 1:
                $status = "confirmed";
            break;
            case 2:
                $status = "pending";
            break;
            case 3:
                $status = "blacklisted";
            break;
        }
        return $status;
    }

}
