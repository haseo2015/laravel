@extends('cosplaydesign.default')

@section('title') Home Page @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')
    <?php dump($projectData);
    $directory = "cd_" . $projectData[0]->slug .  "123456789";
    ?>
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header">Progetto: {!! $projectData[0]->name !!}
                <ol class="subheading-detail breadcrumbs">
                    <li>Area: <a href="/costumi" title="costumi">costumi</a></li>
                    <li>Serie: <a href="/serie/hack-gu" title="Hack G.U.">.Hack G.U</a></li>
                    <li>Tipologia: <a href="/tipologia/videogames" title="videogames">vi deogames</a></li>
                    <li>Autore: <a href="/member/haseoxth" title="autore haseoxth">haseoxth</a></li>
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
            {!! HTML::image('img/cd-ironman-w-motorized-87654321/Stealth-Photo-by-David-Lee.jpg','a picture', array('class' => 'img-responsive cover-image-project pull-left lazy'))  !!}
        </div>
        <div class="col-md-4">
            <p>{!! $projectData[0]->short_description !!} </p>

            <h3>Dettagli:</h3>
            <ul>
                <li>Tempo di realizzazione: <strong>55 giorni</strong></li>
                <li>Costo totale di realizzazione: <strong>180 ~ 200 €</strong></li>
                <li>Materiali utilizzati: <strong>Plastica</strong>, <strong>Licra</strong>, <strong>Dischi in vinile</strong>, <strong>Legno</strong></li>
                <li class="sr-only">Progresso:</li>
            </ul>
        </div>
        <div class="col-md-4">
            <span class="project__progress">
                <input type="text" class="knobby detail"
                           data-width="250"
                           data-height="250"
                           data-fgColor="{!! $projectData[0]->knobColor !!}"
                           data-skin="tron"
                           data-thickness=".2"
                           data-displayPrevious=false
                           data-displayInput="true"
                           data-readOnly="true"
                           value="{!! $projectData[0]->progress !!}">
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

                   @foreach($projectData as $_data)
                    <!-- SINGLE STEP -->
                    <li class="">
                        <h4 class="media-heading">{!! $_data->step_title !!}</h4>
                        <div class="media">
                            @include ("cosplaydesign.includes.tutorial_images_gallery")
                            <div class="media-body">
                                <p>{!! $_data->body !!}</p>
                            </div>
                        </div>
                    </li>
                    <!-- SINGLE STEP END -->
                    @endforeach

                   <!--  <li class="">
                        <h4 class="media-heading">Occorrente</h4>
                        <div class="media">
                            <div class="media-left">
                                <a class="fancybox" rel="group" href="/img/cd-ironman-w-motorized-87654321/Step-1-Card-Helmet.jpg">
                                    <div class="thumbnail thumnail__step media-object">
                                        {!! HTML::image('img/cd-ironman-w-motorized-87654321/Step-1-Card-Helmet.jpg','Pepakura Iron Man Helmet', array('class' => 'img-responsive lazy step-image'))  !!}
                                        <div class="caption">Fig.1 Pepakura Iron Man Helmet skdjhsadkjsad kh </div>
                                    </div>
                                </a>
                                <a class="fancybox" rel="group" href="/img/cd-ironman-w-motorized-87654321/Step-1-Craft-Robo.jpg">
                                <div class="thumbnail thumnail__step media-object">
                                    {!! HTML::image('img/cd-ironman-w-motorized-87654321/Step-1-Craft-Robo.jpg','Pepakura Iron Man Helmet', array('class' => 'img-responsive lazy step-image'))  !!}
                                    <div class="caption">Fig.1 Pepakura Iron Man Helmet skdjhsadkjsad kh </div>
                                </div>
                                    </a>
                                <a class="fancybox" rel="group" href="/img/cd-ironman-w-motorized-87654321/Step-1-Pep-Software.jpg">
                                <div class="thumbnail thumnail__step media-object">
                                    {!! HTML::image('img/cd-ironman-w-motorized-87654321/Step-1-Pep-Software.jpg','Pepakura Iron Man Helmet', array('class' => 'img-responsive lazy step-image'))  !!}
                                    <div class="caption">Fig.1 Pepakura Iron Man Helmet skdjhsadkjsad kh </div>
                                </div>
                                    </a>
                            </div>
                            <div class="media-body">
                                <p>Assicurati di avere a portata di mano:</p>
                                <ol>
                                    <li>1 Kg di campanello di vitello</li>
                                    <li>1 litro di latte</li>
                                    <li>70 gr di burro</li>
                                    <li>2 foglie di alloro</li>
                                    <li>2 spicchi di aglio</li>
                                    <li>1 carota</li>
                                    <li>1 cipolla</li>
                                    <li>1 costa di sedano</li>
                                </ol>
                                <p>Quando l'arrosto avrà raggiunto la giusta doratura, riponetelo in una terrina. Nello stesso tegame per l'arrosto sciogliete il restante burro. Ora potete soffriggervi il trito di verdure. Nel frattempo spellate due spicchi di aglio e uniteli al soffritto, insieme alle foglie di alloro. Fate consumare bene il soffritto, poi aggiungete l'arrosto. Sfumate il tutto con mezzo bicchiere di vino bianco da tavola. Aggiustate di sale e pepe. Mentre il vino sfuma, scaldate il latte per l'arrosto. Poi versatelo nel tegame con l'arrosto e fate cuocere con coperchio per almeno 50 minuti. A fine cottura estraete l'arrosto al latte dal tegame. Verificate che sia pronto pungendolo con uno stecchino. Se fuoriesce del liquido roseo dovrete proseguire con la cottura. Se è trasparente potete proseguire con la ricetta.</p>
                                <ul>
                                    <li>1 Kg di campanello di vitello</li>
                                    <li>1 litro di latte</li>
                                    <li>70 gr di burro</li>
                                    <li>2 foglie di alloro</li>
                                    <li>2 spicchi di aglio</li>
                                    <li>1 carota</li>
                                    <li>1 cipolla</li>
                                    <li>1 costa di sedano</li>
                                </ul>
                                <p>Quando l'arrosto avrà raggiunto la giusta doratura, riponetelo in una terrina. Nello stesso tegame per l'arrosto sciogliete il restante burro. Ora potete soffriggervi il trito di verdure. Nel frattempo spellate due spicchi di aglio e uniteli al soffritto, insieme alle foglie di alloro. Fate consumare bene il soffritto, poi aggiungete l'arrosto. Sfumate il tutto con mezzo bicchiere di vino bianco da tavola. Aggiustate di sale e pepe. Mentre il vino sfuma, scaldate il latte per l'arrosto. Poi versatelo nel tegame con l'arrosto e fate cuocere con coperchio per almeno 50 minuti. A fine cottura estraete l'arrosto al latte dal tegame. Verificate che sia pronto pungendolo con uno stecchino. Se fuoriesce del liquido roseo dovrete proseguire con la cottura. Se è trasparente potete proseguire con la ricetta.</p>
                            </div>
                        </div>
                    </li> -->

                </ol>


            </div>
        </div>
    </div>




@endsection