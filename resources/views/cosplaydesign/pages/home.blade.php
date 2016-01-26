@extends('cosplaydesign.default')

@section('title') Home Page @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')


    @include('cosplaydesign.includes.slider')

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Design di...</h1>
            </div>

            <div class="col-md-4">
                <div class="panel panel-success  text-center projectBlock">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicons glyphicons-boat"></span>Armi</h3>
                    </div>
                    <figure>
                        {!! HTML::image('img/project-armi.jpg')  !!}
                    </figure>
                </div>
            </div>

            <div class="col-md-4">
                <div class="panel panel-info text-center projectBlock">
                    <div class="panel-heading">
                        <h3 class="panel-title">Costumi</h3>
                    </div>
                    <figure>
                        {!! HTML::image('img/project-costumi.jpg')  !!}
                    </figure>
                </div>
            </div>

            <div class="col-md-4">
                <a href="">
                    <div class="panel panel-warning text-center projectBlock">
                        <div class="panel-heading">
                            <h3 class="panel-title">Accessori</h3>
                        </div>
                        <figure>
                            {!! HTML::image('img/project-accessori.jpg')  !!}
                        </figure>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="col-lg-12">
                    <h2 class="page-header">Perchè Cosplay Design?</h2>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <div class="rounded">
                                <figure>
                                    <img src="http://lorempixel.com/75/75/">
                                </figure>
                            </div>
                            <h3>Chi</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <div class="rounded">
                                <figure>
                                    <img src="http://lorempixel.com/75/75/">
                                </figure>
                            </div>
                            <h3>Come</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <div class="rounded">
                                <figure>
                                    <img src="http://lorempixel.com/75/75/">
                                </figure>
                            </div>
                            <h3>Cosa</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="panel panel-default text-center">
                        <div class="panel-body">
                            <div class="rounded">
                                <figure>
                                    <img src="http://lorempixel.com/75/75/">
                                </figure>
                            </div>
                            <h3>Quando</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection