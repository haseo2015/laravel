@extends('cosplaydesign.default')

@section('title') Home Page @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> <span class="fa fa-rebel fa-1x"></span> Accessori
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
            <ul class="list-group">
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
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__author">Autore: <a href="#">Haseo Xth</a></p>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </li>
                <li class="list-group-item project project__detail">
                    <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="75"
                               data-height="75"
                               data-fgColor="orange"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="50">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__author">Autore: <a href="#">Haseo Xth</a></p>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </li>
                <li class="list-group-item project project__detail">
                    <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="75"
                               data-height="75"
                               data-fgColor="green"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="100">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__author">Autore: <a href="#">Haseo Xth</a></p>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </li>
                <li class="list-group-item project project__detail">
                     <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="75"
                               data-height="75"
                               data-fgColor="green"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="50">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__author">Autore: <a href="#">Haseo Xth</a></p>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>
                </li>
            </ul>

            <div class="row">
                <div class="col-md-4 projectCard">
                    <div class="card__author">
                        <a href=""><img src="http://lorempixel.com/75/75/people" alt="..." class="img-circle"></a>
                    </div>
                    <figure>
                        <img src="http://lorempixel.com/800/600/technics" class="img-responsive" alt="Responsive image" >
                    </figure>
                    <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="35"
                               data-height="35"
                               data-fgColor="red"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="10">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </div>
                <div class="col-md-4 projectCard">
                    <div class="card__author">
                        <a href=""><img src="http://lorempixel.com/75/75/fashion" alt="..." class="img-circle"></a>
                    </div>
                    <figure>
                        <img src="http://lorempixel.com/800/600/nightlife" class="img-responsive" alt="Responsive image" >
                    </figure>
                    <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="35"
                               data-height="35"
                               data-fgColor="orange"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="50">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </div>
                <div class="col-md-4 projectCard">
                    <div class="card__author">
                        <a href=""><img src="http://lorempixel.com/75/75/animals" alt="..." class="img-circle"></a>
                    </div>
                    <figure>
                        <img src="http://lorempixel.com/800/600/abstract" class="img-responsive" alt="Responsive image" >
                    </figure>
                    <span class="project__progress pull-right">
                        <input type="text" class="knobby"
                               data-width="35"
                               data-height="35"
                               data-fgColor="green"
                               data-skin="tron"
                               data-thickness=".2"
                               data-displayPrevious=false
                               data-displayInput="true"
                               data-readOnly="true"
                               value="100">
                    </span>
                    <h5 class="progress__title">Vestibulum at eros</h5>
                    <p class="progress__date">Data pubblicazione: 04.01.2016</p>

                </div>
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