@extends('cosplaydesign.default')
@section('pagescript')
    {!! HTML::script('js/sections/cd.functions.js') !!}
    {!! HTML::script('js/sections/cd.lista.js') !!}
@endsection

@section('title')  @endsection
@section('subheading')  @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h3 class="page-header"> Filtra per <strong>{{$currentMC->name}}</strong>
                <small>(trovati <strong>{!! count($projects) !!}</strong> progetti)</small>
            <div class="btn-group btn-group-sm pull-right" role="group">
                <button type="button" class="btn btn-default active js-switch-view" data-view="cd_list" title="List view"><i class="fa fa-list"></i></button>
                <button type="button" class="btn btn-default js-switch-view" data-view="cd_grid" title="Grid view"><i class="fa fa-th"></i></button>
            </div>
            </h3>
        </div>
    </div>
    <div class="row">

        {{-- @include ("cosplaydesign.includes.blocco_cerca") --}}
        <div class="col-md-12">
            @include ("cosplaydesign.includes.view_lista",["projects"=>$projects])
            @include ("cosplaydesign.includes.view_griglia",["projects"=>$projects,"hide" => "cd_hide","isotope"=>false])
        </div>


    </div>
    </div>
</div>


@endsection