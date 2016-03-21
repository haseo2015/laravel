<div class="row {{$hide}} js-view" data-view="cd_grid">
   @if($isotope == true)
    <div class="isotope js-isotope list-group isotope__list" data-layout="fitRows" style="position:relative;">
    @endif
    @foreach($projects as $project)
        <div class="col-md-3 projectCard gallery-item {{$project->category->slug}}">
            <div class="card" data-card-id="{{$project->id}}" data-url="{{'/'.$project->slug}}">
                <div class="card__title__container"><h5 class="card__title">{{$project->name}}</h5></div>
                <div class="card__cover" style="background-image: url({!! $project->directory.$project->cover_image !!})">
                    <div class="card__details">
                        <a href="/progetto/{{$project->slug}}">
                            <div class="row row-fluid">
                                <div class="col-md-12">
                                    <span class="project__progress pull-right progress__container">
                                    <input type="text" class="knobby grid"
                                           data-width="60"
                                           data-height="60"
                                           data-fgColor="{{$project->knobColor}}"
                                           data-skin="tron"
                                           data-thickness=".2"
                                           data-displayPrevious=false
                                           data-displayInput="true"
                                           data-readOnly="true"
                                           value="{{$project->progress}}">
                                    </span>
                                    <ul class="details__list">
                                        <!-- <li><small>Difficoltà:</small><br><input type="hidden" class="rate" data-fractions="2" value="2" disabled="disabled" /></li> -->
                                        <li><label for="autore">Autore:</label> <a href="/membri/{{$project->owner->slug_username}}" title="scehda autore" class="list__author">{{$project->owner->username}}</a></li>
                                        <li><label for="categoria">Categoria:</label> <a href="/categoria/{{$project->category->slug}}"><span class="label label-{{$project->category->category_color}}">{{$project->category->name}}</span></a></li>
                                        <li><label for="serie">Serie:</label> <a href="/serie/"><span class="label label-default">.Hack G.U</span></a></li>
                                        <li><label for="genere">Genere:</label>
                                            @foreach($project->gender as $gender)
                                                <a href="/genere/{{$gender->slug}}"><span class="label label-default">{{$gender->gender}}</span></a>
                                            @endforeach</li>
                                        <li><i class="fa fa-tags"></i>
                                    <span class="tags__container">
                                        @foreach($project->tags as $tag)
                                            <span class="label label-primary">{{$tag}}</span>
                                        @endforeach
                                    </span></li>
                                    </ul>
                                </div>

                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @if($isotope == true)
    </div>
    @endif
</div>