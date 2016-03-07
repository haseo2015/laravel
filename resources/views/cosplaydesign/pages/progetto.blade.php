<?php dump($currentProject) ?>
@extends('cosplaydesign.default')

@section('title')Progetto: {!! $currentProject->name !!} @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')

    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Progetto: {!! $currentProject->name !!}
                <ol class="subheading-detail breadcrumbs">
                    <li>Area: <a href="/categoria/{!! $currentProject->macro_slug !!}" title="{!! $currentProject->macro_name !!}">{!! $currentProject->macro_name !!}</a></li>
                    <li>Serie: <a href="/serie/hack-gu" title="Hack G.U.">.Hack G.U</a></li>
                    <li>Tipologia: <a href="/tipologia/{!! $currentProject->gender[0]->slug !!}" title="{!! $currentProject->gender[0]->gender !!}">{!! $currentProject->gender[0]->gender !!}</a></li>
                    <li>Autore: <a href="/membri/{!! $currentProject->user->slug!!}" title="autore {!! $currentProject->user->username !!}">{!! $currentProject->user->username !!}</a></li>
                </ol>
            </h3>
        </div>
    </div>
    <div class="row project-detail">
        <div class="col-lg-12">
         <h3>Overall di progetto</h3>
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
    <hr>
    <div class="row">
        <div class="col-lg-12">
            <h3>Tutorial di realizzazione</h3>
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