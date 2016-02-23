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
use App\Category;


Route::controller('/', 'SiteController');


Route::resource('/categoria/armi','SiteController');
Route::resource('/accessori','SiteController@getListByCategory');
Route::resource('/costumi','SiteController');
Route::resource('/progetto/{detail}','SiteController');
//Route::controller('/blog', 'FrontendController');

