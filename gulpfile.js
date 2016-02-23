var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
   /* compilo i miei scss */
    mix.sass([
        'app.scss'
        ]
        ,'public/css/app.css');

    /* compilo i miei css */
    mix.styles([
        'bootstrap.min.css',
        'foundation.min.css',
        'jquery.fancybox.css',
        'font-awesome/css/font-awesome.min.css',
        'font-awesome/css/boostrap-rating.css',

    ],'public/css/base.css');

    /* compilo i miei js */
    mix.scripts([
        "vendor/jquery.min.js",
        "vendor/bootstrap.js",
        "vendor/foundation.min.js",
        "vendor/jquery.easing.min.js",
        "vendor/jqBootstrapValidation.js",
        "vendor/what-input.min.js",
        "vendor/scrolling-nav.js",
        "vendor/clean-blog.min.js",
        "vendor/jquery.knob.js",
        "vendor/jquery.lazyload.min.js",
        "vendor/jquery.fancybox.pack.js",
        "vendor/bootstrap-rating.min.js",
        "_functions.js"

    ],'public/js/app.js');


    //mix.scriptsIn('resources/assets/js','public/js/app.js');

    /*versiono i miei file css e js*/
    mix.version([ 'css/base.css','css/app.css','js/app.js']);

    mix.browserSync({
        proxy: 'localhost:8000',
        port: 8000,
        reloadOnRestart : false,
        reloadDebounce: 2000,
        injectChanges: false,
    });
});
