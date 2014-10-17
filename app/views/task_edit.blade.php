@extends('_master')


@section('title')
	Edit Task
@stop



@section('content')

	<!--<h2 class='update-header'>Update: {{ $task->title }}</h2>

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
	</div>-->


	<div class='edit'>

		<div class="col-sm-8 col-sm-offset-2">

		{{ Form::model($task, ['method' => 'post', 'class'=>'form-horizontal', 'action' => ['TaskController@postEdit', $task->id]]) }}
		

	<div class="panel panel-default panel-primary">
		  	<div class="panel-heading">
				<h2>Edit task</h2>
			</div>
			<div class="panel-body">

				<div class="form-group">
				    <label for="title" class="col-sm-3 control-label">Title</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" value="<?php echo $task['title']?>" id="title" name="title" placeholder="Title">
				      <span class="error"></span>
				    </div>
		  		</div>


		  		<div class="form-group">
				    <label for="start_date" class="col-sm-3 control-label">Start Date</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" value="<?php echo $task['start_date']?>" id="start_date" name="start_date" placeholder="Start date">
				      <span class="error"></span>
				    </div>
		  		</div>

		  		<div class="form-group">
				    <label for="due_date" class="col-sm-3 control-label">Due Date</label>
				    <div class="col-sm-9">
				      <input type="date" class="form-control" value="<?php echo $task['due_date']?>" id="due_date" name="due_date" placeholder="Due date">
				      <span class="error"></span>
				    </div>
		  		</div>


		  		<div class="form-group">
				    <label for="description" class="col-sm-3 control-label">Description</label>
				    <div class="col-sm-9">
        				<textarea class="form-control" rows="5" id="description" name="description" placeholder="Description"><?php echo $task['description']?></textarea>
        				<span class="error"></span>
				    </div>
		  		</div>

		  		<di class="form-group">
			  		<button id="add-submit" type="submit" class="btn btn-default fix">Add</button>
			  	</div>
			  	<div class='error-message col-sm-offset-3 col-sm-9'>
					@foreach($errors->all() as $message) 
						<div class='error'>{{ $message }}</div>
					@endforeach
				</div>
			 </div>
		</div>

		{{ Form::close() }}

	</div>
	</div>

@stop