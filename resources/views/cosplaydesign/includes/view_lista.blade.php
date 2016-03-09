<div class="row js-view" data-view="cd_list">
    <ul class="list-group">
        @foreach($projects as $project)
            <li class="list-group-item project project__detail project__list" data-project-id="1">
                <a href="/progetto/{{$project->slug}}" title="vai al progetto">
                    <figure class="list__cover-image">
                        <img src="{{$project->directory}}{{$project->cover_image}}" class="img-responsive lazy" alt="{{$project->name}}" >
                    </figure>
                                 <span class="project__progress list__progress pull-right">
                                    <input type="text" class="knobby"
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
                    <h5 class="progress__title">{{$project->name}}</h5>
                    <p>Categoria: <i class="fa {{$project->category->fonticon}}"></i>{{$project->category->name}}</p>
                    <p class="progress__author">Autore: <a href="/membri/{{$project->owner->username}}" title="scehda autore">{{$project->owner->username}}</a></p>
                    <div class="clear"></div>
                </a>
            </li>
        @endforeach
    </ul>
</div>