@extends('cosplaydesign.default')
@section('title')Progetto: {!! $currentProject  ->fullname !!} @endsection
@section('subheading')  @endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>::{!! $currentProject->name !!}
                <ol class="project__subdetails">
                    <li>Categoria: <a href="/categoria/{{$currentProject->category->slug}}"><span class="label label-{{$currentProject->category->category_color}}">{{$currentProject->category->name}}</span></a></li>
                    <li>Serie: <a href="/serie/{!! $currentProject->serie->serie_slug !!}" title="{!! $currentProject->serie->name !!}">{!! $currentProject->serie->serie_name !!}</a></li>
                    <li>Tipologia:
                        @foreach($currentProject->gender as $_gender)
                            <a href="/genere/{!!$_gender->slug !!}" title="{!! $_gender->gender !!}">{!! $_gender->gender !!}</a>,
                        @endforeach
                    </li>
                    <li>Autore: <a href="/membri/{!! $currentProject->user->slug_username   !!}" title="autore {!! $currentProject->user->username !!}">{!! $currentProject->user->username !!}</a></li>
                </ol>
            </h1>
        </div>
    </div>

    <!-- DETAILS INDEX -->
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
            <span class="project__progress progress__container">
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
    @include ("cosplaydesign.includes.tutorial")
    <!-- RELATED PROJECT -->
    <div class="row related">
        <div class="col-lg-12 page-header">
            <h1>::Potrebbero interessarti anche... </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
           @include ("cosplaydesign.includes.view_griglia",["projects"=>$related,"hide" => ""])
        </div>
    </div>
</div>
@endsection