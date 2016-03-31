<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrivateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo "la";
        return view('cosplaydesign.private.pages.dashboard');

    }

    public function getLogin()
    {
        return view('cosplaydesign.private.default');
    }

    public function getHome()
    {


        return view('cosplaydesign.private.pages.dashboard');
    }
}
