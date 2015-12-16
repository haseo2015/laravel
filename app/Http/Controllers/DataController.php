<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DataController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showData($id)
    {
        return view('lista', ['user' => 'pippo']);
    }

}