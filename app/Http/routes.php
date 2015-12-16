<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return View::make('theme/default');
});

Route::get('/home', function () {
    return View::make('theme/pages.home');
});

Route::get('/about', function () {
    return View::make('theme/pages.about');
});




// passata alla view normale
Route::get('/lista', function () {
    return view('lista');
});
// passata al controller
Route::get('lista/{id}', 'DataController@showData');