
@extends('cosplaydesign.default')

@section('title')  @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> <span class="fa {{$currentMC->fonticon}} fa-1x"></span> {{$currentMC->name}}
            <div class="btn-group btn-group-sm grid-type" role="group" aria-label="...">
                <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>

            </div>
            </h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <h5>Ricerca avanzata</h5>
           <form>
            <ul class="list-group">
               <li class="list-group-item">
                   <label>Parola chiave
                   <input type="text" class="form-control" placeholder="Text input">
                   </label>

               </li>
                <li class="list-group-item">
                    <label> Tipo
                        <select class="form-control">
                            <option>Accessori</option>
                            <option>Armi</option>
                            <option>Costumi</option>
                        </select>
                    </label>
                </li>
                <li class="list-group-item">
                    <label> Serie
                    <select class="form-control">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                        </label>
                </li>
                <li class="list-group-item">
                    <label> Progresso
                        <select class="form-control">
                            <option>Completo</option>
                            <option>Incompleto</option>
                        </select>
                    </label>
                </li>

           </ul>
           </form>
        </div>

        <div class="col-md-9">
            <div class="row cd_list cd_hide">
                <ul class="list-group">
                    @foreach($projects as $pproject)
                        <li class="list-group-item project project__detail" data-project-id="1">
                     <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="75"
                               data-height="75"
                               data-fgColor="red"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="10">
                    </span>
                            <h5 class="progress__title">{{$pproject->name}}</h5>
                            <p class="progress__author">Autore: <a href="#">Haseo Xth</a></p>
                            <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                        </li>
                    @endforeach
            </ul>
            </div>

            <div class="row cd_grid ">

                @foreach($projects as $project)
                    <div class="col-md-4 projectCard">
                        <div class="card" data-card-id="{{$project->id}}" data-url="{{'/'.$project->slug}}">
                            <div class="card__title__container"><h5 class="card__title">{{$project->name}}</h5></div>
                            <div class="card__cover">
                                    <div class="card__details">
                                        <a href="/progetto/{{$project->slug}}">
                                        <span class="project__progress pull-right">
                                            <small>Progresso:</small><br>
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
                                                <ul>
                                                    <!-- <li><small>Difficoltà:</small><br><input type="hidden" class="rate" data-fractions="2" value="2" disabled="disabled" /></li> -->
                                                    <li><small>Categoria: </small><i class="fa {{$project->category->fonticon}}"></i></li>
                                                    <li><small>Tag:</small> <br>
                                                        <span class="tags__container">
                                                            @foreach($project->tags as $tag)
                                                                <span data-url="tag/xxx" title="" class="tiny hollow button">{{$tag}}</span>
                                                            @endforeach
                                                        </span></li>
                                                    <li><small class="card__author--name">Autore: <a href="/author/{{$project->owner->username}}" title="scehda autore">{{$project->owner->username}}</a></small></li>
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





            <!-- paginatore -->
            <div class="col-md-12 text-center">
                <nav>
                    <nav>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </nav>
            </div>
        </div>


    </div>
    </div>



@endsection