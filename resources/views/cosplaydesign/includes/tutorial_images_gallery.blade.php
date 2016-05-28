<?php
//echo $dir;
//echo count($images);
//dump($step)
?>
@if(count($images)>0)
    <div class="gallery__container">
    @foreach($images as $index => $immagine)
        <div class="gallery__element">
            <a class="fancybox img-thumbnail"  rel="group" href="{!! $dir.$immagine->image !!}" title="{!! $immagine->caption !!}" style="background-image:url({{$dir.$immagine->image}})"></a>
            <label  data-number="{{$index+1}}">{!! $immagine->caption !!}</label>
        </div>
    @endforeach
    <div class="clearfix"></div>
    </div>
@endif