<html>
    <head>
        @include ('cosplaydesign.includes.head')
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
                    <li>
                        <a href="/area/contatti">Contatti</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Accedi</a>
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
    <!-- Footer -->
    <footer class="footer">
        <div class="row full-width">
            <div class="col-sm-4 col-lg-4">
                <h3>CosplayDesign</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores alias ea sunt facilis impedit fuga dignissimos illo quaerat iure in nobis id quos, eaque nostrum! Unde, voluptates suscipit repudiandae!</p>

            </div>
            <div class="col-sm-4 col-lg-4">
                <h3>Resta in contatto con noi</h3>
                <p>Registrati alla nostra newsletter gratuita</p>
                <div class="input-group input-group-sm">
                    <span class="input-group-addon" id="sizing-addon2">@</span>
                    <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon2">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Iscrivimi!</button>
                  </span>
                </div>
            </div>

            <div class="col-sm-4 col-lg-4 col-xs-12">
                <h3>Social </h3>
                <ul class="footer-links">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Dribbble</a></li>
                    <ul>
            </div>
        </div>
    </footer>
    <script src="{{ elixir('js/app.js') }}"></script>
    </body>

</html>