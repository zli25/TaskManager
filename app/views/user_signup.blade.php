@extends('_master')

@section('title')
	Sign up
@stop

@section('content')

	<h1 class='signup-header'>Sign up</h1>
	
	
	
	{{ Form::open(array('url' => '/signup', 'id'=>'signup')) }}
		

		First Name<br>
		{{ Form::text('first_name') }}<br><br>

		Last Name<br>
		{{ Form::text('last_name') }}<br><br>

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