 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Cosplaydesing.it</title>
     <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
     <link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- If you are using CSS version, only link these 2 files, you may add app.css to use for your overrides if you like. -->
     <link rel="stylesheet" href="{{ elixir('css/base.css') }}">
     <link rel="stylesheet" href="{{ elixir('css/app.css') }}">
     <script src="{{ elixir('js/app.js') }}"></script>
    {!! HTML::script('js/sections/cd.core.js') !!}
    {!! HTML::script('js/sections/cd.base.js') !!}
    @yield('pagescript')
