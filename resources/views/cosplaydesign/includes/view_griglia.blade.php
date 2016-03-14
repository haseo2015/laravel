<div class="row cd_hide js-view" data-view="cd_grid">
    @foreach($projects as $project)
        <div class="col-md-4 projectCard">
            <div class="card" data-card-id="{{$project->id}}" data-url="{{'/'.$project->slug}}">
                <div class="card__title__container"><h5 class="card__title">{{$project->name}}</h5></div>
                <div class="card__cover">
                    <div class="card__details">
                        <a href="/progetto/{{$project->slug}}">
                                        <span class="project__progress pull-right">
                                            <small>Progresso:</small><br>
                                            <input type="text" class="knobby small"
                                                   data-width="75"
                                                   data-height="75"
                                                   data-fgColor="{{$project->knobColor}}"
                                                   data-skin="tron"
                                                   data-thickness=".2"
                                                   data-displayPrevious=false
                                                   data-displayInput="true"
                                                   data-readOnly="true"
                                                   value="{{$project->progress}}">
                                        </span>
                            <ul>
                                <!-- <li><small>Difficoltà:</small><br><input type="hidden" class="rate" data-fractions="2" value="2" disabled="disabled" /></li> -->
                                <li><small>Categoria: </small><i class="fa {{$project->category->fonticon}}"></i></li>
                                <li><small>Tag:</small> <br>
                                                        <span class="tags__container">
                                                            @foreach($project->tags as $tag)
                                                                <a href=""><span class="label label-primary">{{$tag}}</span></a>
                                                            @endforeach
                                                        </span></li>
                                <li><small class="card__author--name">Autore: <a href="/membri/{{$project->owner->slug_username}}" title="scehda autore">{{$project->owner->username}}</a></small></li>
                            </ul>
                            <div class="clearfix"></div>
                        </a>
                    </div>
                    <!--  -->

                    <figure>
                        <img src="{{$project->directory}}{{$project->cover_image}}" class="img-responsive lazy" alt="{{$project->name}}" >
                    </figure>
                </div>

            </div>
        </div>
    @endforeach
</div>