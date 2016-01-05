@extends('blog.master.layout')

@section('title') Articoli nella Categoria: {{ $currentCategory->name }} @endsection

@section('subheading') Articoli nella Categoria: {{ $currentCategory->name }} @endsection

@section('content')
    @foreach($articles as $article)
        @include('blog.articles_list_item', ['article' => $article])
    @endforeach

    <div style="text-align: center;">
        {!! $articles->render() !!}
    </div>
@endsection