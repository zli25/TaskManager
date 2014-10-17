@extends('_master')

@section('title')
	Login in
@stop

@section('content')

	<h1 class='login-header'>log in</h1>
	
	{{ Form::open(array('url' => '/login', 'id'=>'login')) }}
		

		Email<br>
		{{ Form::text('email') }}<br><br>
	
		Password:<br>
		{{ Form::password('password') }}<br>
		<small>Min: 6</small><br><br>
		
		{{ Form::submit('Submit') }}
	
	{{ Form::close() }}

	<div class='error-message'>
		@foreach($errors->all() as $message) 
			<div class='error'>{{ $message }}</div>
		@endforeach
	</div>

@stop