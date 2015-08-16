@extends('admin._layouts.admin')

@section('content')

<h1>Create Article</h1>
{{Form::open(array('route' =>'admin.articles.store'))}}
<ul>
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
		
		{{Form::submit('Create')}}
		
	</li>
</ul>
{{Form::close()}}

@stop