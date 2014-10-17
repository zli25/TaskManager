
@extends('_master')

@section('content')


<h2 class='tasks'>Tasks done</h2>

@foreach($tasks as $task)
			
	<section class='task done'>

		<div class="panel panel-default panel-success">
			<div class="panel-heading"><a href="/task/{{ $task['id'] }}"><h4>{{ $task['title'] }}</h4></a></div>
			  <div class="panel-body">
	
		<p> (From {{ $task['start_date'] }} to {{ $task['due_date'] }})</p>	
	</div>
</div>
		
	</section>

@endforeach

@stop