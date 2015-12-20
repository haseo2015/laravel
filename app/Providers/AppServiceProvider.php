<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Menu;

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
        view()->composer('theme.default', function($view){
            $voci = Menu::where('attivo', 1)
                ->orderBy('ordine', 'asc')
                ->get();
            $view->with('voci_menu', $voci);
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
