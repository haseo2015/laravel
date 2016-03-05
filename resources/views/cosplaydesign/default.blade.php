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
                <a class="navbar-brand page-scroll" href="#page-top">CosplayDesgin</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="#about">About</a>
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
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <div class="top-bar-right">
                    <ul class="menu vertical medium-horizontal" data-responsive-menu="drilldown medium-dropdown">
                        <li class="has-submenu">
                            <a href="#">Registrati/Accedi</a>
                            <ul class="submenu menu vertical" data-submenu>
                                <li><button href="#" class="facebook fa fa-facebook-square radius button split"> <span></span>Accedi via Facebook</button></li>
                                <li><button href="#" class="twitter fa fa-twitter-square radius button split"> <span></span>Accedi via Twitter</button></li>
                                <li><button href="#" class="google fa fa-google-plus-square radius button split"> <span></span>Accedi via Google +</button></li>
                                <li><button href="#" class="cosplayDesign fa fa-instagram radius button split"> <span></span>Accedi via CosplayDesign</button></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="footer">
        <div class="row full-width">
            <div class="small-12 medium-4 large-4 columns">
                <h3>CosplayDesign</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum maiores alias ea sunt facilis impedit fuga dignissimos illo quaerat iure in nobis id quos, eaque nostrum! Unde, voluptates suscipit repudiandae!</p>

            </div>
            <div class="small-12 medium-4 large-4 columns">
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

            <div class="small-12 medium-4 large-4 columns">
                <h3>CosplayDesign @ Social </h3>
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