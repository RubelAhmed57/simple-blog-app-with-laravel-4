@extends('admin._layouts.admin')
@section('extralink')
<style type="text/css">
	
	a{
		text-decoration: none;
		font-weight: bold;
		color:#555555;
	}
</style>
@stop
@section('content')

<h1>Articles</h1>

{{ link_to_route('admin.articles.create','Create New')}}


@if(count($articles))
<ul>
@foreach($articles as $article)
<li>
	{{ link_to_route('admin.articles.edit',$article->title, array($article->id)) }}
	{{Form::open(array('route' =>array('admin.articles.destroy',$article->id),'method' =>'delete', 'class' => 'destroy'))}}
	{{Form::submit('delete')}}
	{{Form::close()}}
</li>
@endforeach
</ul>
@endif


@stop