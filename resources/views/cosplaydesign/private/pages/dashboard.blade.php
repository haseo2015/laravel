@extends('cosplaydesign.private.default')
@section('title')@endsection
@section('subheading')  @endsection
@section('content')
<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-lg-12">
            <h1 class="page-header">Generale <small>Tieni sott'occhio i tuoi progetti</small></h1>
        </div>
    </div>
    <!-- NOTIFICHE PRINCIPALI -->
    <div class="row">
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">12</div>
                            <div>New Tasks!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">124</div>
                            <div>New Orders!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-support fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">13</div>
                            <div>Support Tickets!</div>
                        </div>
                    </div>
                </div>
                <a href="#">
                    <div class="panel-footer">
                        <span class="pull-left">View Details</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- NOTIFICHE PROGETTI -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Quick view <small>progetti in corso, completati e di amici</small></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-hourglass"></i> Ultimi progetti in corso</div>
                <div class="panel-body">

                    <ul class="list-group">
                        <li class="list-group-item"><a href="#">Cras justo odio</a></li>
                        <li class="list-group-item">Dapibus ac facilisis in</li>
                        <li class="list-group-item">Morbi leo risus</li>
                        <li class="list-group-item">Porta ac consectetur ac</li>
                        <li class="list-group-item">Vestibulum at eros</li>
                    </ul>



                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-check-square-o"></i> Ultimi progetti completati</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-users"></i>  Ultimi progetti amici</div>
                <div class="panel-body">
                    Panel content
                </div>
            </div>
        </div>
    </div>
</div>
@endsection