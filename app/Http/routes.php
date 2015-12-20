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



Route::controller('/', 'FrontendController');

Route::get('/{section}', function ($section) {
   // return FrontendController
});
/*
Route::get('/about', function () {
    return
::make('theme/pages.about');
});

Route::get('/contatti', function () {
    return View::make('theme/pages.contatti');
});



// passata alla view normale
Route::get('/lista', function () {
    return view('theme/default');
});




// passata al controller
//Route::get('lista/{id}', 'DataController@showData');