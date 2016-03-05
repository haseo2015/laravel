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

Route::resource('/progetto/{detail}/','SiteController@getDataBySlug');
Route::resource('/categoria/{slug}/','SiteController@getListByCategory');
Route::resource('/categoria/tutti/','SiteController@getListByCategory');
Route::controller('/', 'SiteController');
//Route::controller('/blog', 'FrontendController');

