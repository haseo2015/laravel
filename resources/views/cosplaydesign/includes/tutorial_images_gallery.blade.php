<?php
/*echo $dir;
echo count($step->images);
dump($step) */?>
@if(count($step->images)>0)
    <div class="gallery__container">
    @foreach($step->images as $index => $immagine)
        <div class="gallery__element">
            <a class="fancybox img-thumbnail"  rel="group" href="{!! $dir.$immagine->image !!}" title="{!! $immagine->caption !!}" style="background-image:url({{$dir.$immagine->image}})"></a>
            <label  data-number="{{$index+1}}">{!! $immagine->caption !!}</label>
    </div>
    @endforeach
    <div class="clearfix"></div>
    </div>
{{-- Comment
@foreach($immagini["file"] as $index => $immagine)
    <div class="media-left">
        <a class="fancybox" rel="group" href="/{!! $dir.$step-> !!}" title="{!! $immagini["captions"][$index] !!}">
            <div class="thumbnail thumnail__step media-object">
                {!! HTML::image($currentProject->directory.$immagine,$immagini["captions"][$index], array('class' => 'img-responsive lazy step-image'))  !!}
                <div class="caption">{!! $immagini["captions"][$index] !!}</div>
            </div>
        </a>
    </div>


--}}
@endif