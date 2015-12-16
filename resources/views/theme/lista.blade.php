<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="it" > <![endif]-->
<html class="no-js" lang="it" >

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation 5</title>

    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
    {!! Html::style('css/foundation.css') !!}
    {!! Html::style('components/slickslider/slick/slick.css') !!}
    {!! Html::style('components/slickslider/slick/slick-theme.css') !!}
    {!! Html::style('css/app.css') !!}
</head>
<body>

{{ isset($user) ? $user : 'Default' }}



<!-- body content here -->
{!!Html::script('js/vendor/jquery.min.js')!!}
{!!Html::script('js/vendor/what-input.min.js')!!}
{!!Html::script('js/foundation.min.js')!!}
{!!Html::script('components/slickslider/slick/slick.min.js')!!}
{!!Html::script('js/app.js')!!}
</body>
</html>
