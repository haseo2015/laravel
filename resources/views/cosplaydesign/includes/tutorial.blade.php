<div class="row tutorial">
    <div class="col-lg-12 page-header">
        <h1>::Tutorial <small>vediamo come realizzarlo</small></h1>
    </div>
    <!-- STEP TUTORIAL -->
    <div class="row" style="vertical-align: top">
        <div class="col-md-4">
            <nav class="col-md-12 widget project__docs">
                <h2 class="page-header"><small>Indice</small></h2>
                <ol class="index__list">
                    @foreach($currentProject->steps as $index => $step)
                        <li><a href="#{{$index}}"><span>{!! $step->step_title !!}</span></a></li>
                    @endforeach
                </ol>
            </nav><br>
            @if(count($currentProject->documents)>0)
                <nav class="col-md-12 widget tutorial__index">
                    <h2 class="page-header"><small>Documentazione</small></h2>
                    <ol class="index__list">
                        @foreach($currentProject->documents as $doc)
                        <li><a href="{{$currentProject->directory.$doc->document_name}}" title="{{$currentProject->directory.$doc->document_name}}" target="_blank"><span>{{$doc->document_name}}</span></a></li>
                        @endforeach
                    </ol>
                </nav><br>
            @endif
            @if(count($currentProject->media)>0)
            <nav class="col-md-12 widget project__media">
                <h2 class="page-header"><small>Media</small></h2>
                @foreach($currentProject->media as $media)
                    <div class="col-md-12 mediaobject"><iframe width="100%" height="180" src="{{$media->media_url}}" frameborder="0" allowfullscreen></iframe></div>
                @endforeach
            </nav>
            @endif
        </div>
        <div class="col-md-8 tutorial__content">
            {!! dump( $currentProject->steps[0]) !!}
            <ol class="tutorial__stepper">
                @include ("cosplaydesign.includes.single_step",['currentStep' => $currentProject->steps[0]])
            </ol>

            @if(count($currentProject->steps)>1)
            <div class="tutorial__navigation">

                <button class="btn btn-primary btn-prevStep">Indietro</button>

                <button class="btn btn-primary btn-nextStep pull-right">Avanti</button>
            </div>
            @endif
        </div>
    </div>
</div>