
@extends('cosplaydesign.default')

@section('title')  @endsection

@section('subheading')  @endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> <span class="fa {{$currentMC->fonticon}} fa-1x"></span> {{$currentMC->name}}
            <div class="btn-group btn-group-sm pull-right" role="group">
                <button type="button" class="btn btn-default active js-switch-view" data-view="cd_list" title="List view"><i class="fa fa-list"></i></button>
                <button type="button" class="btn btn-default js-switch-view" data-view="cd_grid" title="Grid view"><i class="fa fa-th"></i></button>
            </div>
            </h3>
        </div>
    </div>
    <div class="row">
        @include ("cosplaydesign.includes.blocco_cerca")

        <div class="col-md-9">
            @include ("cosplaydesign.includes.view_lista")
            @include ("cosplaydesign.includes.view_griglia")

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