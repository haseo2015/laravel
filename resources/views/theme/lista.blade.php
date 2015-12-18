<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="it" > <![endif]-->
<html class="no-js" lang="it" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation 5</title>

    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    {!! HTML::style('css/foundation.css') !!}
    {!! HTML::style('components/slickslider/slick/slick.css') !!}
    {!! HTML::style('components/slickslider/slick/slick-theme.css') !!}
    {!! HTML::style('css/app.css') !!}
</head>
<body>

{{ isset($user) ? $user : 'Default' }}



<!-- body content here -->
{!!HTML::script('js/vendor/jquery.min.js')!!}
{!!HTML::script('js/vendor/what-input.min.js')!!}
{!!HTML::script('js/foundation.min.js')!!}
{!!HTML::script('components/slickslider/slick/slick.min.js')!!}
{!!HTML::script('js/app.js')!!}
</body>
</html>
