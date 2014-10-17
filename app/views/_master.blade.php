<!doctype html>
<html>
<head>

	<title>@yield('title','Task Manager')</title>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	


	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/style.css" type="text/css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
   	<script src="js/bootstrap.min.js"></script>

   	<script src="js/main.js"></script>

	@yield('head')

</head>

<body>

	<header>

		<div class="container">

		@if(Auth::check())
			
			<a href='/task/create'>Create a new task</a>  
			<a href='/task/all'> View all my tasks</a>  
			<a href='/task/todo'>Tasks in progress</a> 
			<a href='/task/done'>Tasks done</a>

			<a class='logout' href='/logout'>Log out</a>
			<span class='header-welcome'>Hi, {{ Auth::user()->fname; }}</span>
		@else 
			<span><h2>Welcome to Task Manager</h2></span>
			<!--<a class='signup' href='/signup'>Sign up</a>-->
			<!--<a class='login' href='/login'>Log in</a>-->


			{{ Form::open(array('url' => '/login', 'id'=>'login-form', 'class'=>'form-inline')) }}
				<div class="form-group">
			    <label class="sr-only" for="exampleInputEmail2">Email address</label>
			    <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
			  </div>
			 
			  <div class="form-group">
			    <label class="sr-only" for="exampleInputPassword2">Password</label>
			    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
			  </div>

			  <button type="submit" class="btn btn-default" id="login-submit">Sign in</button>

				
			
			{{ Form::close() }}
			
		@endif

	</div>


	</header>

	<div class='container main-content'>
		<div class='flash-message'>
			@if(Session::get('flash_message'))
				<div class='flash-message'>{{ Session::get('flash_message') }}</div>
			@endif
		</div>

		@yield('content')

		@yield('body')

		@yield('footer')

	</div>

	<footer>
		<div class="container">&copy;2014 Zibo Li. All Rights Reserved.</div>
	</footer>

</body>

</html>
