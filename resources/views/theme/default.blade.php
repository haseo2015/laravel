<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="it" > <![endif]-->
<html class="no-js" lang="it" >

<head>
    @include('theme.includes.head')
</head>
<body>
@include('theme.includes.navbar')

@yield('content')


<!-- body content here -->
@include ('theme.includes.js_scripts')
</body>
</html>
