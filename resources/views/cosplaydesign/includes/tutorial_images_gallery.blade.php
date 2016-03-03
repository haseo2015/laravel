@foreach($array_immagini as $immagine)
    <?php dump($immagine) ?>
    <div class="media-left">
        <a class="fancybox" rel="group" href="/img/cd-ironman-w-motorized-87654321/Step-1-Card-Helmet.jpg">
            <div class="thumbnail thumnail__step media-object">
                {!! HTML::image($currentProject->directory.$immagine,'Pepakura Iron Man Helmet', array('class' => 'img-responsive lazy step-image'))  !!}
                <div class="caption">Fig.1 Pepakura Iron Man Helmet skdjhsadkjsad kh </div>
            </div>
        </a>
    </div>
@endforeach