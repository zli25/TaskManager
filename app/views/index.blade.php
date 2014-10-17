
@extends('_master')

@section('title')
	Welcome to TaskManager
@stop

@section('content')

<div class="row" id="mainpage-section">
<div class="col-sm-5" id="introduction">
	<h3>It's easy to manage your tasks!</h3>
	<h4></h4>
	<ul>
		<li>Create your tasks</li>
		<li>View your tasks</li>
		<li>Manage your tasks</li>
	</ul>
	<img src="/images/todo.jpg">
</div>	

<div class="col-sm-7">
{{ Form::open(array('url' => '/signup', 'id'=>'signup', 'class'=>'form-horizontal')) }}
		

		<div class="panel panel-default panel-primary">
		  	<div class="panel-heading">
				<h3>Sign Up</h3>
			</div>
			<div class="panel-body">

				<div class="form-group">
				    <label for="first_name" class="col-sm-3 control-label">First Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="fname" name="first_name" placeholder="First name">
				      <span class="error"></span>
				    </div>
		  		</div>


		  		<div class="form-group">
				    <label for="last_name" class="col-sm-3 control-label">Last Name</label>
				    <div class="col-sm-9">
				      <input type="text" class="form-control" id="lname" name="last_name" placeholder="Last name">
				      <span class="error"></span>
				    </div>
		  		</div>


			  
				<div class="form-group">
				    <label for="email" class="col-sm-3 control-label">Email</label>
				    <div class="col-sm-9">
				      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
				     <span class="error"></span>
				    </div>
		  		</div>


		  		<div class="form-group">
				    <label for="passwrod" class="col-sm-3 control-label">Password</label>
				    <div class="col-sm-9">
				      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
				     <span class="error"></span>
				    </div>
		  		</div>
		  		<di class="form-group">
			  		<button id="contact-submit" type="submit" class="btn btn-default fix">Sign up</button>
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