@extends('cosplaydesign.default')
@section('title') Home Page @endsection
@section('subheading') Developer, Curious & Enthusiast. @endsection
@section('pagescript') {!! HTML::script('js/sections/cd.homepage.js') !!} @endsection
@section('content')

   {{--  @include('cosplaydesign.includes.slider') --}}
   <div class="mycarousel">
       <div style="background: url(img/slider/slider01.jpg)">
           <h1>League of Legends</h1>
       </div>
       <div style="background: url(img/slider/slider02.jpg)">
           <h1>Final Fantasy</h1>
       </div>
       <div style="background: url(img/slider/slider03.jpg)">
           <h1>Gantz</h1>
       </div>
       <div style="background: url(img/slider/slider04.jpg)">
           <h1>Visual Key</h1>
       </div>
       <div style="background: url(img/slider/slider05.jpg)">
           <h1>Prototype</h1>
       </div>
   </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Design di...</h1>
            </div>

            <div class="col-md-4">
                <a href="/categoria/armi/">
                <div class="panel panel-success  text-center projectBlock">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="glyphicons glyphicons-boat"></span>Armi</h3>
                    </div>
                    <figure>
                        {!! HTML::image('img/project-armi.jpg',"",array('class' => 'img-responsive lazy'))  !!}
                    </figure>
                </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/categoria/costumi/">
                <div class="panel panel-info text-center projectBlock">
                    <div class="panel-heading">
                        <h3 class="panel-title">Costumi</h3>
                    </div>
                    <figure>
                        {!! HTML::image('img/project-costumi.jpg',"",array('class' => 'img-responsive lazy'))  !!}
                    </figure>
                </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="/categoria/accessori/">
                    <div class="panel panel-warning text-center projectBlock">
                        <div class="panel-heading">
                            <h3 class="panel-title">Accessori</h3>
                        </div>
                        <figure>
                            {!! HTML::image('img/project-accessori.jpg',"",array('class' => 'img-responsive lazy'))  !!}
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
                            <h3>Design</h3>
                            <p>Tanti tutorial realizzati da cosplayers più e meno bravi, più e meno dettagliati, per prendere spunto ed imparare dagli altri, come realizzare costumi, armi ed accessori dei tuoi personaggi preferiti.</p>
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
                            <h3>Community</h3>
                            <p>Una grande community di cosplayers, dove scambiare opinioni, creare ed organizzare gruppi cosplay, condividere e scambiare materiali e documenti per la creazione di interpretazioni</p>
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
                            <h3>Partners</h3>
                            <p>CosplayDesing è in collaborazione con le maggiori fiere del fumetto, e di molti negozi di accessori vari. </p>
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