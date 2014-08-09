@extends('_master')

@section('title')
	Add a new task
@stop

@section('content')
	
	<h2 class="add-task">Add a new task</h2>
	
		
	{{ Form::open(array('url' => '/task/create', 'method' => 'POST', 'class'=>'create-task')) }}

		
		<div class='form-group'>
			{{ Form::label('title') }} 
			{{ Form::text('title') }}
		</div>
		
		<div class='form-group'>
			{{ Form::label('start_date', 'Start Date') }} 
			{{ Form::text('start_date') }} (YYYY-MM-DD)
		</div>

		<div class='form-group'>
			{{ Form::label('due_date', 'Due Date  ') }} 
			{{ Form::text('due_date') }} (YYYY-MM-DD)
		</div>
		
		<div class='form-group'>
			{{ Form::label('description','Description') }} 
			{{Form::textarea('description')}} 
		</div>
		
		
		{{ Form::submit('Add') }}
	
	{{ Form::close() }}
	
	
@stop