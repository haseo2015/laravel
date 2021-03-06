var elixir = require('laravel-elixir');
require('laravel-elixir-requirejs');
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

    //mix.requirejs('app.js');


    /* compilo i miei css */
    mix.styles([
        'bootstrap.min.css',
        'jquery.fancybox.css',
        'bootstrap-rating.css',
        'font-awesome/css/font-awesome.min.css',
        'isotope.css',
        'slick.css',
        'slick-theme.css'
    ],'public/css/base.css');

   /* compilo i miei scss */
    mix.sass([
        'app.scss'
        ]
        ,'public/css/app.css');

    /* compilo i miei js */
    mix.scripts([
        "vendor/jquery.min.js",
        "vendor/bootstrap.js",
        "vendor/jquery.easing.min.js",
        "vendor/jqBootstrapValidation.js",
        "vendor/scrolling-nav.js",
        //gulp"vendor/clean-blog.min.js",
        "vendor/jquery.knob.js",
        "vendor/jquery.lazyload.min.js",
        "vendor/jquery.fancybox.pack.js",
        "vendor/bootstrap-rating.min.js",
        "vendor/handlebars-v4.0.5.js",
        "components/isotope/isotope.pkgd.min.js",
        "components/slickslider/slick/slick.min.js"
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
