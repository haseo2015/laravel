<?php dump($currentProject);echo $currentProject->fullname; //exit;  ?>
@extends('cosplaydesign.default')

@section('title')Progetto: {!! $currentProject  ->fullname !!} @endsection

@section('subheading')  @endsection

@section('content')

    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>{!! $currentProject->name !!}
                <ol class="project__subdetails">
                    <li>Area: <a href="/categoria/{!! $currentProject->macro_slug !!}" title="{!! $currentProject->macro_name !!}">{!! $currentProject->macro_name !!}</a></li>
                    <li>Serie: <a href="/serie/hack-gu" title="Hack G.U.">.Hack G.U</a></li>
                    <li>Tipologia:
                        @foreach($currentProject->gender as $_gender)
                            <a href="/tipologia/{!!$_gender->slug !!}" title="{!! $_gender->gender !!}">{!! $_gender->gender !!}</a>,
                        @endforeach
                    </li>
                    <li>Autore: <a href="/membri/{!! $currentProject->user->slug_username   !!}" title="autore {!! $currentProject->user->username !!}">{!! $currentProject->user->username !!}</a></li>
                </ol>
            </h1>
        </div>
    </div>

    <div class="row project-detail">
        <div class="col-lg-12">
         <h2>Dati tecnici</h2>
        </div>
     </div>

    <div class="row">
        <div class="col-md-4">
            {!! HTML::image($currentProject->directory.$currentProject->cover_image,'a picture', array('class' => 'img-responsive cover-image-project pull-left lazy'))  !!}
        </div>
        <div class="col-md-4">
            <p>{!! $currentProject->short_description !!} </p>

            <h3>Dettagli:</h3>
            <ul>
                <li>Tempo di realizzazione: <strong>{!! $currentProject->timing_completion !!} giorni</strong></li>
                <li>Costo totale di realizzazione: <strong>{!! $currentProject->approximate_cost !!} &euro;</strong></li>
                <li>Materiali utilizzati:<br>
                    <div class="materials">
                        @foreach($currentProject->materials as $mat)
                            <span class="tiny hollow button">{!! $mat->material_name !!}</span>
                        @endforeach
                    </div></li>
                <li class="sr-only">Progresso:</li>
            </ul>
        </div>
        <!-- PROGRESS INFOGRAFIC -->
        <div class="col-md-4">
            <span class="project__progress">
                <input type="text" class="knobby detail"
                           data-width="250"
                           data-height="250"
                           data-fgColor="{!! $currentProject->knobColor !!}"
                           data-skin="tron"
                           data-thickness=".2"
                           data-displayPrevious=false
                           data-displayInput="true"
                           data-readOnly="true"
                           value="{!! $currentProject->progress !!}">
            </span>
        </div>
    </div>
    <!-- BEGIN TUTORIAL STEPS -->
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>Tutorial <small>vediamo come realizzarlo</small></h1>
        </div>
        <!-- STEP TUTORIAL -->
        <div class="row tutorial-step">
            <div class="col-lg-12">
                <ol class="turorial__stepper">
                    @foreach($currentProject->steps as $step)
                        <!-- SINGLE STEP -->
                        <li class="">
                            <h4 class="media-heading">{!! $step->step_title !!}</h4>
                            <div class="media">
                                @include ("cosplaydesign.includes.tutorial_images_gallery")
                                <div class="media-body">
                                    <p>{!! $step->body !!}</p>
                                </div>
                            </div>
                        </li>
                        <!-- SINGLE STEP END -->
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
@endsection