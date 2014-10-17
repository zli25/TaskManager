
@extends('_master')

@section('content')

<h2 class='tasks'>Your Tasks</h2>

@foreach($tasks as $task)
			
	@if($task->completeness == 1)
		<section class='task done'>

			<div class="panel panel-default panel-success">
			  <div class="panel-body">
			    <p><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
			  </div>
			</div>			
		</section>
	@elseif($task->completeness == 0)

		<section class='task todo'>
		<div class="panel panel-default">
			  <div class="panel-body">
			<p><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
		</div>
		</div>	
		</section>
	@endif
@endforeach

@stop