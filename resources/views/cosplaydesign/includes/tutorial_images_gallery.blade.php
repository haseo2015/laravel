<?php
$array_immagini = explode(",", $step->images->image_list);
$array_captions = explode("|", $step->images->captions);
$immagini =[];
$immagini["file"] = $array_immagini;
$immagini["captions"] = $array_captions;
?>

@foreach($immagini["file"] as $index => $immagine)
    <div class="media-left">
        <a class="fancybox" rel="group" href="/{!! $currentProject->directory.$immagine !!}" title="{!! $immagini["captions"][$index] !!}">
            <div class="thumbnail thumnail__step media-object">
                {!! HTML::image($currentProject->directory.$immagine,$immagini["captions"][$index], array('class' => 'img-responsive lazy step-image'))  !!}
                <div class="caption">{!! $immagini["captions"][$index] !!}</div>
            </div>
        </a>
    </div>

@endforeach