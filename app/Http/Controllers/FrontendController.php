<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function getIndex() {
        // pagina principale
        // prelevo l'elenco delle categorie per il menu...
       // $categories = \App\Category::all();

        // prelevo gli articoli (includendo i dati sulle rispettive categorie ed autore associati)
        $articles = \App\Article::with('categories', 'user')->where('published_at', '<=', 'NOW()')->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);

        return view('blog.home', compact('articles'));
    }

    public function getArticolo($slug) {
        // dettaglio di un singolo articolo
        //$categories = \App\Category::all();
        $article = \App\Article::with('categories', 'user')->where('slug', '=', $slug)->first();

        return view('blog.article', compact('article'));
    }

    public function getAutore($slug) {
        // articoli di uno specifico autore
        // $categories = \App\Category::all();
        $author = \App\User::where('slug', '=', $slug)->first();
        $articles = $author->articles()->where('published_at', '<=', 'NOW()')
            ->where('is_published', '=', true)
            ->orderBy('published_at', 'DESC')->paginate(5);
        return view('blog.author', compact('author', 'articles'));
    }

    public function getCategoria($slug) {
        // articoli di una specifica categoria
        $categories = \App\Category::all();
        $currentCategory = \App\Category::where('slug', '=', $slug)->first();
        $articles = $currentCategory->articles()
            ->where('published_at', '<=', 'NOW()')
            ->where('is_published', '=', true)->orderBy('published_at', 'DESC')->paginate(5);
        return view('blog.category', compact('currentCategory', 'articles'));
    }




}
