@extends('_layouts.default')

@section('content')

<h1>{{{ $article->title }}}</h1>

<p class="created_at">By: {{{ $article->user->name}}} /  Date: {{{ date('Y-m-d', strtotime($article->created_at))}}} </p>

<p>{{{ $article->body }}}</p>

<p>{{ link_to_route('home', '&lsaquo; &nbsp; all articles') }} </p>

@stop