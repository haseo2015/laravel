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

Route::get('/', function() {

    // prelevo l'elenco delle categorie per il menu...
    $categories = App\Category::all();

    // prelevo gli articoli (includendo i dati sulle rispettive categorie ed autore associati)
    //$articles = \App\Article::with('categories', 'user')->where('published_at', '<=', 'NOW()')->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);

   // return view('blog.home', ['articles' => $articles, 'categories' => $categories]);

});

