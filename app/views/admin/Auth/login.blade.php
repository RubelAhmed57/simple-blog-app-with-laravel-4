@extends('admin._layouts.another')

@section('content')




{{Form::open(array('route' =>'admin.login.post'))}}
<ul>
	<li>
		
		{{Form::label('email', 'Admin Id')}}
		{{Form::text('email')}}
		{{$errors->first('email','<p class="error">:message</p>')}}
	</li>
	<li>
		
		{{Form::label('password', 'Password')}}
		{{Form::password('password')}}
		{{$errors->first('email','<p class="error">:message</p>')}}
	</li>
	<li>
		
		{{Form::submit('Log in')}}
		
	</li>
</ul>
{{Form::close()}}
@stop