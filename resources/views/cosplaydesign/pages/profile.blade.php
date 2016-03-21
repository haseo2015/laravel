@extends('cosplaydesign.default')

@section('title') {{$userdata->username}} :: author :: CosplayDesign  @endsection

@section('subheading')  @endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Library</a></li>
                <li class="active">Data</li>
            </ol>
        </div>
    </div>
    <div class="container">
    <div clas="row profile">
        <div class="col-sm-3">
            <!-- USER PROFILE -->
            <div class="panel widget light-widget panel-bd-top">
                <div class="panel-heading no-title"> </div>
                <div class="panel-body">
                    <div class="text-center"> <img alt="" class="profile__image img-responsive img-circle" src="{{$userdata->details->avatar}}"> </div>
                    <div class="row">
                        <div class="col-xs-12"> <a class="btn vd_btn vd_bg-green btn-xs btn-block no-br"><i class="fa fa-check-circle append-icon"></i>Friends</a> </div>
                    </div>
                    <h2 class="font-semibold mgbt-xs-5 profile__name">{{$userdata->username}}</h2>
                    <h4 class="profile__sub"><cite>{{$userdata->details->motto}}</cite></h4>
                    <p class="profile__shortdesc">{{$userdata->details->bio}}</p>
                    <div class="mgtp-20">
                        <table class="table table-striped table-hover">
                            <tbody>
                            <tr>
                                <td>Status</td>
                                <td><span class="label label-success">Attivo</span></td>
                            </tr>
                            <tr>
                                <td>Community Rating</td>
                                <td><input class="js-rate" type="hidden" /></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <!-- SUBNAVIGATION TABS -->
            <div class="tabs widget">
                <ul class="nav nav-tabs widget js-tabs">
                    <li class="active"> <a data-toggle="tab"  href="#profile-tab"><i class="fa fa-user"></i> Profilo <span class="menu-active"></span> </a></li>
                    <li> <a data-toggle="tab" href="#projects-tab"> <i class="fa fa-edit"></i> Progetti <span class="menu-active"></span> </a></li>
                    <li> <a data-toggle="tab" href="#photos-tab"> <i class="fa fa-picture-o"></i> Galleria <span class="menu-active"></span> </a></li>
                    <li> <a data-toggle="tab" href="#friends-tab"><i class="fa fa-group"></i> Amici <span class="menu-active"></span> </a></li>
                    <li> <a data-toggle="tab" href="#groups-tab"><i class="fa fa-cubes"></i> Gruppi <span class="menu-active"></span> </a></li>
                    <li> <a data-toggle="tab" href="#media-tab"><i class="fa fa-film"></i> Media <span class="menu-active"></span> </a></li>
                </ul>
                <div class="tab-content">
                    <div id="profile-tab" class="tab-pane active">
                        <div class="pd-20">
                            <div class="vd_info tr"> </div>
                            <!-- AUTHOR DATA -->
                            <h3 class="mgbt-xs-15"><i class="fa fa-user mgr-10 profile-icon"></i> Profilo</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Nome:</label>
                                        <div class="col-xs-7 controls">{{$userdata->first_name}}</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Cognome:</label>
                                        <div class="col-xs-7 controls">{{$userdata->last_name}}</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">User:</label>
                                        <div class="col-xs-7 controls">{{$userdata->username}}</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Email:</label>
                                        <div class="col-xs-7 controls">{{ HTML::obfuscate($userdata->email) }}</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Data di nascita:</label>
                                        <div class="col-xs-7 controls">{{$userdata->details->birthday}}</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Interessi:</label>
                                        <div class="col-xs-7 controls">(to do)</div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                @if($userdata->details->website)
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Website:</label>
                                        <div class="col-xs-7 controls"><a href="http://{{$userdata->details->website}}" target="_blank" title="Sito personale">{{$userdata->details->website}}</a></div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                                @endif
                                <div class="col-sm-6">
                                    <div class="row mgbt-xs-0">
                                        <label class="col-xs-5 control-label">Social:</label>
                                        <div class="col-xs-7 controls">
                                            @if($userdata->details->facebook)<a href="http://facebook.com/{{$userdata->details->facebook}}" target="_blank" title="Seguimi su Facebook"><i class="fa fa-facebook-square facebook fa-2x"></i></a>@endif
                                                @if($userdata->details->google)<a href="https://plus.google.com/+{{$userdata->details->google}}" target="_blank" title="Seguimi su Google+"><i class="fa fa-google-plus-square google fa-2x"></i></a>@endif
                                                @if($userdata->details->youtube)<a href="https://www.youtube.com/c/{{$userdata->details->youtube}}" target="_blank" title="Seguimi su Youtube+"><i class="fa fa-youtube-square google fa-2x"></i></a>@endif
                                                @if($userdata->details->twitter)<a href="http://twitter.com/{{$userdata->details->twitter}}" target="_blank" title="Seguimi su Twitter"><i class="fa fa-twitter-square twitter fa-2x"></i></a>@endif
                                                @if($userdata->details->instagram)<a href="https://www.instagram.com/{{$userdata->details->instagram}}" target="_blank" title="Seguimi su Instagram"><i class="fa fa-instagram instagram fa-2x"></i></a>@endif
                                        </div>
                                        <!-- col-sm-10 -->
                                    </div>
                                </div>
                            </div>
                            <hr class="pd-10">
                            <!-- EXPERIENCE / EDUCATION -->
                            <div class="row">
                                <div class="col-sm-7 mgbt-xs-20">
                                    <h3 class="mgbt-xs-15"><i class="fa fa-file-text-o"></i> Esperienze</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Owner</a> at <a href="http://www.venmond.com">Vendroid Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2013 ~ Now</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">CEO</a> at <a href="http://www.venmond.com">Mc. Dondon</a> <span class="menu-info"><span class="menu-date"> March 2011 ~ February 2013</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Web Designer</a> at <a href="http://www.venmond.com">Web Design Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2010 ~ February 2011</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> <a href="http://www.venmond.com">Sales</a> at <a href="http://www.venmond.com">Sales Company Ltd.</a> <span class="menu-info"><span class="menu-date"> March 2009 ~ February 2010</span></span> </span> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-trophy mgr-10 profile-icon"></i> Premi vinti</h3>
                                    <div class="content-list content-menu">
                                        <ul class="list-wrapper">
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_green"><i class="fa  fa-circle-o"></i></span> <span class="menu-text"> Bachelor's degree, E-Commerce/Electronic Commerce at <a href="http://www.venmond.com">UCLA</a> <span class="menu-info"><span class="menu-date"> August 2003 ~ July 2008</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">Web Design Education</a> <span class="menu-info"><span class="menu-date"> March 2006 ~ February 2007</span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Louis High School</a> <span class="menu-info"><span class="menu-date"> August 2000 ~ July 2003 </span></span> </span> </li>
                                            <li class="mgbt-xs-10"> <span class="menu-icon vd_grey"><i class=" fa  fa-circle-o"></i></span> <span class="menu-text"> Student at <a href="http://www.venmond.com">St. Monica Junior High School</a> <span class="menu-info"><span class="menu-date"> August 1998 ~ July 2000</span></span> </span> </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- row -->
                            <hr class="pd-10">
                            <div class="row">
                                <!-- ACTIVITY -->
                                <div class="col-sm-6">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-globe mgr-10 profile-icon"></i> Attività</h3>
                                    <div class="">
                                        <div class="content-list">
                                            <div data-rel="scroll" class="mCustomScrollbar _mCS_6" style="overflow: hidden;"><div class="mCustomScrollBox mCS-light" id="mCSB_6" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 400px;"><div class="mCSB_container" style="position:relative; top:0;">
                                                        <ul class="list-wrapper">
                                                            <li> <span class="menu-icon vd_yellow"><i class="fa fa-suitcase"></i></span> <span class="menu-text"> Someone has give you a surprise <span class="menu-info"><span class="menu-date"> ~ 12 Minutes Ago</span></span> </span>  </li>
                                                            <li> <span class="menu-icon vd_blue"><i class=" fa fa-user"></i></span> <span class="menu-text"> Change your user profile details <span class="menu-info"><span class="menu-date"> ~ 1 Hour 20 Minutes Ago</span></span> </span> </li>
                                                            <li> <span class="menu-icon vd_red"><i class=" fa fa-cogs"></i></span> <span class="menu-text"> Your setting is updated <span class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></span> </span></li>
                                                            <li>  <span class="menu-icon vd_green"><i class=" fa fa-book"></i></span> <span class="menu-text"> Added new article <span class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></span> </span>  </li>
                                                            <li>  <span class="menu-icon vd_green"><img alt="example image" src="http://placehold.it/50x50"></span> <span class="menu-text"> Change Profile Pic <span class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></span> </span> </li>
                                                            <li>  <span class="menu-icon vd_red"><i class=" fa fa-cogs"></i></span> <span class="menu-text"> Your setting is updated <span class="menu-info"><span class="menu-date"> ~ 12 Days Ago</span></span> </span>  </li>
                                                            <li>  <span class="menu-icon vd_green"><i class=" fa fa-book"></i></span> <span class="menu-text"> Added new article <span class="menu-info"><span class="menu-date"> ~ 19 Days Ago</span></span> </span> </li>
                                                            <li>  <span class="menu-icon vd_green"><img alt="example image" src="http://placehold.it/50x50"></span> <span class="menu-text"> Change Profile Pic <span class="menu-info"><span class="menu-date"> ~ 20 Days Ago</span></span> </span>  </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- WIDGET SKILLS -->
                                <div class="col-sm-6">
                                    <h3 class="mgbt-xs-15 font-semibold"><i class="fa fa-flask mgr-10 profile-icon"></i> Skill</h3>
                                    <div class="skill-list">
                                        <div class="skill-name"> Photoshop </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 90%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="90" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">90%</span> </div>
                                        </div>
                                    </div>
                                    <div class="skill-list">
                                        <div class="skill-name"> Illustrator </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 20%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar" class="progress-bar progress-bar-danger "> <span class="sr-only">20%</span> </div>
                                        </div>
                                    </div>
                                    <div class="skill-list">
                                        <div class="skill-name"> PHP </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 50%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">50% Complete</span> </div>
                                        </div>
                                    </div>
                                    <div class="skill-list">
                                        <div class="skill-name"> Javascript </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 60%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-info "> <span class="sr-only">60% Complete</span> </div>
                                        </div>
                                    </div>
                                    <div class="skill-list">
                                        <div class="skill-name"> Communication </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 95%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="95" role="progressbar" class="progress-bar progress-bar-success "> <span class="sr-only">95% Complete</span> </div>
                                        </div>
                                    </div>
                                    <div class="skill-list">
                                        <div class="skill-name"> Writing </div>
                                        <div class="progress  progress-sm">
                                            <div style="width: 45%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="45" role="progressbar" class="progress-bar progress-bar-warning "> <span class="sr-only">45% Complete</span> </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- col-sm-7 -->
                            </div>
                        </div>
                        <!-- pd-20 -->
                    </div>
                    <!-- home-tab -->
                    <!-- PROJECTS TAB -->
                    <div id="projects-tab" class="tab-pane">
                        <div class="pd-20">
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-edit profile-icon"></i> Progetti</h3>
                            <div class="btn-group btn-group-sm pull-right" role="group">
                                <button type="button" class="btn btn-default active js-switch-view" data-view="cd_list" title="List view"><i class="fa fa-list"></i></button>
                                <button type="button" class="btn btn-default js-switch-view" data-view="cd_grid" title="Grid view"><i class="fa fa-th"></i></button>
                            </div>
                            <ul class="filters nav nav-pills">
                                <li class="active"><a href="#photos-1" data-filter="*">Tutti</a></li>
                                <li><a href="#" data-filter=".armi">Armi</a></li>
                                <li><a href="#" data-filter=".accessori">Accessori</a></li>
                                <li><a href="#" data-filter=".costumi">Costumi</a></li>
                            </ul>
                            <br>
                           @include ("cosplaydesign.includes.view_lista");
                            <!-- PROJECTS GALLERY -->
                            <div class="row js-view cd_hide" data-view="cd_grid">
                                <ul class="filters nav nav-pills">
                                    <li class="active"><a href="#photos-1" data-filter="*">All</a></li>
                                    <li><a href="#photos-2" data-filter=".cat-1">Armi</a></li>
                                    <li><a href="#photos-3" data-filter=".cat-2">Accessori</a></li>
                                    <li><a href="#photos-4" data-filter=".cat-3">Costumi</a></li>
                                </ul>
                                <br>
                                <div class="isotope js-isotope user__gallery" data-layout="masonry" style="position:relative;">
                                    <div class="gallery-item  cat-1">
                                        <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://www.lorempixel.com/300/200/technics" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="http://www.lorempixel.com/300/200/nature" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://www.lorempixel.com/300/200/nature" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="http://www.lorempixel.com/300/200/nature" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://www.lorempixel.com/300/200/nature" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-3">
                                        <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://www.lorempixel.com/300/200/nightlife" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-1">
                                        <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="img/photos/06.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nature/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-3">
                                        <a href="img/photos/08.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nightlife/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="img/photos/04.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nature/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-1">
                                        <a href="img/photos/10.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-3">
                                        <a href="img/photos/09.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nightlife/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="img/photos/01.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nature/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-1">
                                        <a href="img/photos/11.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                            <div class="bg-cover"></div>
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-1">
                                        <a href="img/photos/12.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-3">
                                        <a href="img/photos/13.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nightlife/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                    <div class="gallery-item  cat-2">
                                        <a href="img/photos/14.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                            <img alt="example image" src="http://lorempixel.com/400/300/nature/" class="img-circle img-responsive">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PHOTOS TAB -->
                    <div id="photos-tab" class="tab-pane">
                        <div class="pd-20">
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-picture-o mgr-10 profile-icon"></i> Gallleria</h3>
                            <ul id="" class="filters nav nav-pills">
                                <li class="active"><a href="#photos-1" data-filter="*">All</a></li>
                                <li><a href="#photos-2" data-filter=".filter-1">Photos of You</a></li>
                                <li><a href="#photos-3" data-filter=".filter-2">Scenery</a></li>
                                <li><a href="#photos-4" data-filter=".filter-3">Vacation</a></li>
                            </ul>
                            <br>
                            <div class="isotope js-isotope user__gallery" style="position:relative;">
                                <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 0px;">
                                    <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://www.lorempixel.com/300/200/technics" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 200px;">
                                    <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://www.lorempixel.com/300/200/technics" class="img-circle img-responsive">
                                    </a>
                                </div>

                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 400px;">
                                    <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://www.lorempixel.com/300/200/technics" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 600px;">
                                    <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://www.lorempixel.com/300/200/technics" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 800px;">
                                    <a href="http://www.lorempixel.com/300/200/technics" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 1000px;">
                                    <a href="img/photos/06.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 1200px;">
                                    <a href="img/photos/08.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 1400px;">
                                    <a href="img/photos/04.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 1600px;">
                                    <a href="img/photos/10.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>

                                <div class="gallery-item   filter-3" style="position: absolute; left: 0px; top: 1800px;">
                                    <a href="img/photos/09.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 2000px;">
                                    <a href="img/photos/01.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 2200px;">
                                    <a href="img/photos/11.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                        <div class="bg-cover"></div>
                                    </a>
                                </div>
                                <div class="gallery-item  filter-1" style="position: absolute; left: 0px; top: 2400px;">
                                    <a href="img/photos/12.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-3" style="position: absolute; left: 0px; top: 2600px;">
                                    <a href="img/photos/13.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>
                                <div class="gallery-item  filter-2" style="position: absolute; left: 0px; top: 2800px;">
                                    <a href="img/photos/14.jpg" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                        <img alt="example image" src="http://lorempixel.com/400/300/people/" class="img-circle img-responsive">
                                    </a>
                                </div>

                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- pd-20 -->
                    </div>
                    <!-- FRIENDS TAB -->
                    <div id="friends-tab" class="tab-pane">
                        <div class="pd-20">
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-users profile-icon"></i> Amici</h3>
                            <ul class="filters nav nav-pills">
                                <li class="active"><a href="#photos-1" data-filter=".confirmed">Friends</a></li>
                                <li><a href="#photos-2"  data-filter=".pending">Pending Request</a></li>
                                <li><a href="#photos-3" data-filter=".blacklisted">Blacklisted</a></li>
                            </ul>
                            <div class="content-grid column-xs-3 column-sm-4 column-md-4 column-lg-6 height-xs-4 mgbt-xs-20">
                                <div>
                                    <div class="isotope js-isotope user__gallery" data-layout="masonry" style="position:relative;">
                                        <?php $type = array(array("confirmed","cc3366"),array("pending","fac321"),array("blacklisted","cccccc")); ?>
                                        @for($i=1;$i<=20;$i++)
                                        <div class="gallery-item <?php echo $type[mt_rand(0,count($type)-1)][0]; ?>">
                                            <a href="/membri/#" data-rel="prettyPhoto[2]" rel="prettyPhoto[2]">
                                                <img alt="example image" src="http://www.placehold.it/150/<?php echo $type[mt_rand(0,count($type)-1)][1]; ?>" class="img-circle img-responsive">
                                            </a>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div><!-- pd-20 -->
                    </div>
                    <!-- GROUPS TAB -->
                    <div id="groups-tab" class="tab-pane">
                        <div class="pd-20">
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-cubes profile-icon"></i> Gruppi</h3>
                            <div class="row">
                                <div class="col-xs-12 col-sm-6">
                                    <div class="content-list content-large menu-action-right">
                                        <ul class="list-wrapper pd-lr-15">
                                            <li>
                                                <div class="menu-icon"><a href="#"><img src="http://placehold.it/150x150" alt="example image"></a></div>
                                                <div class="menu-text">
                                                    <h4 class="mgbt-xs-0"><a href="#">Groupis Group</a></h4>
                                                    <div class="menu-info">
                                                        <span class="menu-date"> 3467 members </span>

                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>
                                                </div>
                                                <div class="menu-action">
                                                    <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- list-wrapper -->
                                    </div> <!-- content-list -->
                                </div> <!-- col-xs-12 col-sm-6 -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="content-list content-large menu-action-right">
                                        <ul class="list-wrapper pd-lr-15">
                                            <li>
                                                <div class="menu-icon"><a href="#"><img src="http://placehold.it/150x150" alt="example image"></a></div>
                                                <div class="menu-text">
                                                    <h4 class="mgbt-xs-0"><a href="#">Ztormin Community</a></h4>
                                                    <div class="menu-info">
                                                        <span class="menu-date"> 12597 members </span>

                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>
                                                </div>
                                                <div class="menu-action">
                                                    <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- list-wrapper -->
                                    </div> <!-- content-list -->
                                </div> <!-- col-xs-12 col-sm-6 -->

                                <div class="col-xs-12 col-sm-6">
                                    <div class="content-list content-large menu-action-right">
                                        <ul class="list-wrapper pd-lr-15">
                                            <li>
                                                <div class="menu-icon"><a href="#"><img src="http://placehold.it/150x150" alt="example image"></a></div>
                                                <div class="menu-text">
                                                    <h4 class="mgbt-xs-0"><a href="#">Book Lovers</a></h4>
                                                    <div class="menu-info">
                                                        <span class="menu-date"> 67 members </span>

                                                    </div>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidtation ullamco...</p>
                                                </div>
                                                <div class="menu-action">
                                                    <div data-placement="bottom" data-toggle="tooltip" data-original-title="Leave Group" class="menu-action-icon vd_red">
                                                        <i class="fa fa-times"></i>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul> <!-- list-wrapper -->
                                    </div> <!-- content-list -->
                                </div> <!-- col-xs-12 col-sm-6 -->




                            </div> <!-- row -->
                        </div> <!-- pd-20 -->
                    </div>
                    <!-- MEDIA TAB -->
                    <div id="media-tab" class="tab-pane">
                        <div class="pd-20">
                            <h3 class="mgbt-xs-15 mgtp-10 font-semibold"><i class="fa fa-film profile-icon"></i> Media</h3>
                            <ul class="filters nav nav-pills">
                                <li class="active"><a href="#photos-1" data-filter="*">Tutti</a></li>
                                <li><a href="#" data-filter=".v_armi">Armi</a></li>
                                <li><a href="#" data-filter=".v_accessori">Accessori</a></li>
                                <li><a href="#" data-filter=".v_costumi">Costumi</a></li>
                            </ul>
                            <br>
                            <div class="row">
                                <div class="isotope js-isotope list-group isotope__list" data-layout="fitRows" style="position:relative;">

                                    @foreach($projects as $project)
                                    @foreach($project->media as $media)
                                        <div class="col-md-4 list-group-item v_{{$project->category->slug}}"><iframe width="100%" height="180" src="{{$media->media_url}}" frameborder="0" allowfullscreen></iframe></div>
                                    @endforeach
                                @endforeach
                                </div>
                            </div>
                        </div> <!-- pd-20 -->
                    </div>
                </div>
                <!-- tab-content -->
            </div>
            <!-- tabs-widget -->
        </div>
        <div class="clearfix"></div>
    </div>
    </div>
@endsection