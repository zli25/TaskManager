
@extends('_master')

@section('content')
			
		
		<h2>{{ $task['title'] }}</h2>
		<p>Start date: {{ $task['start_date'] }},  Due date: {{ $task['due_date'] }}</p>

		<p class='description'>{{ $task['description']}}</p>


		@if($task['completeness'] == 0)
			<p> Status: in progress</p>   
			
			<div class='task-done fix'> 
				<span>Set it to</span>
				{{ Form::model($task, ['method' => 'post', 'action' => ['TaskController@postDone', $task->id]]) }}

					{{ Form::submit('Done') }}
	
				{{ Form::close() }}
			</div>

			<div class='fix'></div>
		@elseif ($task['completeness'] == 1)
			<p> Status: done</p>
		@endif

		<p><a href="/task/edit/{{ $task['id'] }}">Edit task</a><p>
		
@stop