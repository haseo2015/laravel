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
/*------------- PARTI PRIVATE ----------------------*/
Route::controller('private','PrivateController');
/*------------- AUTORIZZAZIONI ----------------------*/
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::controllers([
    'password' => 'Auth\PasswordController',
]);


/*------------- SOCIAL LOGIN ----------------------*/
Route::get('github', 'AccountController@github_redirect');
Route::get('account/github', 'AccountController@github');

Route::get('facebook', 'AccountController@facebook_redirect');
Route::get('account/facebook', 'AccountController@facebook');


/*------------- PARTI PUBBLICHE ----------------------*/
Route::resource('/area/{page}/','SiteController@redirectToPage');

Route::resource('/membri/{slug}/','UserController@getMemberData');
Route::resource('/tipologia/{slug}/','SiteController@getProjectsByType');

Route::resource('/serie/{serie}/','SiteController@getListBySeries'); // dettaglio progetto
Route::resource('/genere/{gender}/','SiteController@getListByGender'); // dettaglio progetto
Route::resource('/progetto/{detail}/','SiteController@getProjectData'); // dettaglio progetto
Route::resource('/categoria/{slug}/','SiteController@getListByCategory');
Route::resource('/categoria/tutti/','SiteController@getListByCategory');
Route::controller('/', 'SiteController');

/* TO DO: social login*/

Route::get('/auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');
Route::get('/auth/google', 'Auth\AuthController@redirectToProvider');
Route::get('/auth/google/callback', 'Auth\AuthController@handleProviderCallback');
//Route::controller('/blog', FrontendController');

