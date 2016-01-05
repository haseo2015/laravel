<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Requests;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('blog.master.layout', function($view){
            $view->with('categories', \App\Category::all());
        });

        view()->composer('cosplaydesign.default.layout', function($view){
            $view->with('categories', \App\MacroCategory::all());
        });

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
