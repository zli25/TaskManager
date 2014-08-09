@extends('_master')


@section('title')
	Edit Task
@stop



@section('content')

				<h2 class='update-header'>Update: {{ $task->title }}</h2>

	<div class='edit'>

		{{ Form::model($task, ['method' => 'post', 'action' => ['TaskController@postEdit', $task->id]]) }}
		
			<div class='form-group'>
				{{ Form::label('title') }} 
				{{ Form::text('title', $task['title']) }}
			</div>
			
			<div class='form-group'>
				{{ Form::label('start_date', 'Start Date') }} 
				{{ Form::text('start_date', $task['start_date']) }}
				(YYYY-MM-DD)
			</div>

			<div class='form-group'>
				{{ Form::label('due_date', 'Due Date') }} 
				{{ Form::text('due_date', $task['due_date']) }}
				(YYYY-MM-DD)
			</div>
			
			<div class='form-group'>
				{{ Form::label('description','Description') }} 
				{{Form::textarea('description', $task['description'])}}
			</div>
			
			{{ Form::submit('Save') }}
		
		{{ Form::close() }}
	</div>

@stop