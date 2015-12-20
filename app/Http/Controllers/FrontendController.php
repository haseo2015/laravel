<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Menu;


class FrontendController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return Response
     */

    public function getIndex(){
        $voci = Menu::where('attivo', 1)
            ->orderBy('ordine', 'asc')
            ->get();
        return view('theme/default', ['voci_menu' => $voci]);
    }


}