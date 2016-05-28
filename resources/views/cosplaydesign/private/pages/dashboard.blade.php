@extends('cosplaydesign.private.default')
@section('title')@endsection
@section('subheading')  @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Generale <small>Tieni sott'occhio le tue informazioni</small></h1>

        </div>
    </div>
    <!-- NOTIFICHE PRINCIPALI -->
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-green relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-plus fa-4x"></i>
                        <div>Nuovo costume</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-qq fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! $numeroProgetti->costumi !!}</div>
                                <div>Costumi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-yellow relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-plus fa-4x"></i>
                        <div>Nuovo accessorio</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-rebel fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! $numeroProgetti->accessori !!}</div>
                                <div>Accessori</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-red relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-plus fa-4x"></i>
                        <div>Nuova arma</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-yelp fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! $numeroProgetti->armi !!}</div>
                                <div>Armi</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-info relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-plus fa-4x"></i>
                        <div>Nuovo Media</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-youtube-play fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! count($numeroMedia) !!}</div>
                                <div>Media</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-primary  relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-edit fa-4x"></i>
                        <div>Gestisci amici</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-users fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! count($numeroAmici) !!}</div>
                                <div>Amici</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
                <div class="panel panel-default relative">
                    <a href="#" class="overlink col-xs-3 col-md-12">
                        <i class="fa fa-edit fa-4x"></i>
                        <div>Gestisci gruppi</div>
                    </a>
                    <div class="panel-heading">
                        <div class="row text-center">
                            <div class="col-xs-3 col-md-12">
                                <i class="fa fa-cubes fa-4x"></i>
                            </div>
                            <div class="col-xs-12 text-center">
                                <div class="huge">{!! $numeroProgetti->costumi !!}</div>
                                <div>Gruppi</div>
                            </div>
                        </div>
                    </div>
                </div>
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
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-check-square-o"></i> Ultimi progetti completati</div>
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($projectInProgress as $progettoInCorso)
                            <li class="list-group-item"><a href="#">{!! $progettoInCorso->name !!}</a>
                                <div class="progress__container pull-right">
                                    <input type="text" class="knobby list"
                                           data-width="40"
                                           data-height="40"
                                           data-fgColor="{!! $progettoInCorso->knobColor !!}"
                                           data-skin="tron"
                                           data-thickness=".2"
                                           data-displayPrevious=false
                                           data-displayInput="true"
                                           data-readOnly="true"
                                           value="{!! $progettoInCorso->progress  !!}">
                                </div>
                                <div class="clearfix"></div></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-hourglass"></i> Ultimi progetti in corso</div>
                <div class="panel-body">

                    <ul class="list-group">
                        @foreach($projectCompleted as $progettoCompleto)
                        <li class="list-group-item"><a href="progetto/{!! $progettoCompleto->slug !!}">{!! $progettoCompleto->name !!}</a>
                            <div class="progress__container pull-right">
                                <input type="text" class="knobby list"
                                       data-width="40"
                                       data-height="40"
                                       data-fgColor="{!! $progettoCompleto->knobColor !!}"
                                       data-skin="tron"
                                       data-thickness=".2"
                                       data-displayPrevious=false
                                       data-displayInput="true"
                                       data-readOnly="true"
                                       value="{!! $progettoCompleto->progress  !!}">
                            </div>
                        <div class="clearfix"></div></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><i class="fa fa-users"></i>  Ultimi progetti amici</div>
                <div class="panel-body">
                    In progress
                </div>
            </div>
        </div>
    </div>
</div>
@endsection