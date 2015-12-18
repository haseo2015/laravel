<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use App\Menu;

class DataController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */
    public function showData($id)
    {
        $voci = Menu::where('attivo', 1)
                          ->orderBy('ordine', 'asc')
                          ->get();
        return view('theme/includes.navbar', ['voci_menu' => $voci]);
    }

}