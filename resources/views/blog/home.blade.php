@extends('blog.master.layout')

@section('title') Home Page @endsection

@section('subheading') Developer, Curious & Enthusiast. @endsection

@section('content')

    @foreach($articles as $article)
        @include('blog.articles_list_item', ['article' => $article])
    @endforeach

@endsection