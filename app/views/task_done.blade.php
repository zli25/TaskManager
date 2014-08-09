
@extends('_master')

@section('content')


<h2 class='tasks'>Tasks done</h2>

@foreach($tasks as $task)
			
	<section class='task done'>
	
		<p><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
		
	</section>

@endforeach

@stop