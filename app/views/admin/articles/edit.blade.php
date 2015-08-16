@extends('admin._layouts.admin')

@section('content')

<h1>Edit Article</h1>


{{Form::model($article, array('route' => array('admin.articles.update',$article->id),'method' =>'put'))}}
<ul >
	<li>
		
		{{Form::label('user_id', 'Author')}}
		{{Form::select('user_id',User::lists('name','id'))}}
		{{$errors->first('user_id','<p class="error">:message</p>')}}
	</li>
	<li>
		
		{{Form::label('title', 'Title')}}
		{{ Form::text('title') }}
		{{$errors->first('title','<p class="error">:message</p>')}}
	</li>
	<li>
		
		{{Form::label('body', 'Body')}}
		{{ Form::textarea('body') }}
		{{$errors->first('body','<p class="error">:message</p>')}}
	</li>

	

	<li>
		
		{{Form::submit('update')}}
		
	</li>
</ul>
{{Form::close()}}

@stop