@extends('_layouts.default')

@section('content')

@foreach($articles as $article)
	<article>
		<h2>{{ link_to_route('article', $article->title, array($article->id)) }}</h2>
		<p class="created_at">By: {{{ $article->user->name}}} /  Date: {{{ date('Y-m-d', strtotime($article->created_at))}}} </p>

		<p>{{{ str_limit($article->body) }}}</p>
		<p>{{ link_to_route('article', 'Read article &rsaquo;', array($article->id)) }}</p>
	</article>
@endforeach


@stop