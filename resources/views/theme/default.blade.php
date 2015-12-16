<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="it" > <![endif]-->
<html class="no-js" lang="it" >

<head>
    @include('theme.includes.head')
</head>
<body>
@include('theme.includes.navbar')

<div class="your-class">
    <div>your content</div>
    <div>your content</div>
    <div>your content</div>
</div>
@yield('content')


<!-- body content here -->
@include ('theme.includes.js_scripts')
</body>
</html>
