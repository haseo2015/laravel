<html>
<head>
    @include ('cosplaydesign.includes.head')
    {!! HTML::style("css/sb-admin-2.css") !!}
    {!! HTML::style("css/admin.css") !!}
</head>
<body id="page-top">
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="/">CosplayDesgin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav navbar-left">
                <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li>
                    <a href="/chi-siamo">Chi siamo</a>
                </li>
                <li class="dropdown">
                    <a href="/progetti/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Progetti <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/categoria/accessori"><i class="fa fa-rebel"></i> Accessori</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/categoria/armi"><i class="fa fa-yelp"></i> Armi</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/categoria/costumi"><i class="fa fa-qq"></i> Costumi</a></li>
                    </ul>
                </li>
                <li><a href="/area/contatti">Contatti</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="/progetti/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{!! $userdata->details->avatar !!}" class="img-circle navbar__avatar"> {!! $userdata->username !!} <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/categoria/accessori"><i class="fa fa-user"></i> Il mio profilo</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="/categoria/armi"><i class="fa fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>


        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<div class="maincontent">
    @yield('content')
</div>
<div class="clearfix"></div>
{!! HTML::script("js/app.js") !!}
{!! HTML::script("js/sb-admin-2.js") !!}
</body>
</html>