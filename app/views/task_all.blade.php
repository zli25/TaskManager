
@extends('_master')

@section('content')

<h2 class='tasks'>Your Tasks</h2>


@foreach($tasks as $task)
			
	@if($task->completeness == 1)
		<section class='task done'>
			
			<p><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
				
		</section>
	@elseif($task->completeness == 0)

		<section class='task todo'>
		
			<p><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
			
		</section>
	@endif
@endforeach

@stop