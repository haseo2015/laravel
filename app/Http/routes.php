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
Route::resource('/area/{page}/','SiteController@redirectToPage');

Route::resource('/membri/{slug}/','UserController@getMemberData');
Route::resource('/tipologia/{slug}/','SiteController@getProjectsByType');
Route::resource('/serie/{slug}/','SiteController@getProjectsBySeries');

Route::resource('/serie/{serie}/','SiteController@getListBySeries'); // dettaglio progetto
Route::resource('/genere/{gender}/','SiteController@getListByGender'); // dettaglio progetto
Route::resource('/progetto/{detail}/','SiteController@getProjectData'); // dettaglio progetto
Route::resource('/categoria/{slug}/','SiteController@getListByCategory');
Route::resource('/categoria/tutti/','SiteController@getListByCategory');
Route::controller('/', 'SiteController');

/* TO DO: social login*/
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('auth/google/callback', 'Auth\AuthController@handleProviderCallback');
//Route::controller('/blog', FrontendController');

