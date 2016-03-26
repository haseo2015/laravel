<div class="row js-view" data-view="cd_list">
    <ul class="isotope js-isotope list-group isotope__list" data-layout="fitRows" style="position:relative;">
        @foreach($projects as $project)
            <li class="list__element list-group-item {{$project->category->slug}}">
                <dl class="element__container">
                    <dt class="element__container_image img-circle">
                        <a href="/progetto/{{$project->slug}}" title="vai al progetto" style="background-image: url({{$project->directory.$project->cover_image}})"></a>
                    </dt>
                    <dd>
                        <h3 class="list-group-item-heading"><a href="/progetto/{{$project->slug}}" title="vai al progetto">{{$project->name}}</a></h3>
                        <p class="list-group-item-text">
                            Autore: <a href="/membri/{{$project->owner->slug_username}}" title="scehda autore">{{$project->owner->username}}</a><br>
                            Categoria: <a href="/categoria/{{$project->category->slug}}"><span class="label label-{{$project->category->category_color}}">{{$project->category->name}}</span></a><br>
                            Serie: </i> <a href="/serie/{{$project->serie->serie_slug}}/"><span class="label label-info">{{$project->serie->serie_name}}</span></a><br>
                            Genere:
                            @foreach($project->gender as $gender)
                            <a href="/genere/{{$gender->slug}}"><span class="label label-default">{{$gender->gender}}</span></a>
                            @endforeach
                            <br><i class="fa fa-tags"></i>
                            @foreach($project->tags as $tag)
                                <span class="label label-primary">{{$tag}}</span>
                            @endforeach

                        </p>
                    </dd>
                    <dt class="pull-right element__knobby">
                        <div class="progress__container">
                            <input type="text" class="knobby list"
                               data-width="140"
                               data-height="140"
                               data-fgColor="{{$project->knobColor}}"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="{{$project->progress}}">
                        </div>
                    </dt>
                </dl>

            </li>

                <!--
            <li class="list-group-item project project__detail project__list" data-project-id="1">
                <a href="/progetto/{{$project->slug}}" title="vai al progetto">
                    <figure class="list__cover-image">
                        <img src="{{$project->directory}}{{$project->cover_image}}" class="img-responsive lazy" alt="{{$project->name}}" >
                    </figure>
                                 <span class="project__progress list__progress pull-right">
                                    <input type="text" class="knobby"
                                           data-width="100"
                                           data-height="100"
                                           data-fgColor="{{$project->knobColor}}"
                                           data-skin="tron"
                                           data-thickness=".2"
                                           data-displayPrevious=false
                                           data-displayInput="true"
                                           data-readOnly="true"
                                           value="{{$project->progress}}">
                                </span>

                    <h5 class="progress__title">{{$project->name}}</h5>
                    <p>Categoria: <i class="fa {{$project->category->fonticon}}"></i>{{$project->category->name}}</p>
                    <div class="clear"></div>
                </a>
            </li> -->
        @endforeach
    </ul>
</div>