<!doctype html>
<html>
<head>

	<title>@yield('title','Task Manager')</title>

	<link href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/flatly/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/styles/style.css" type="text/css">

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
			@if(Session::get('flash_message'))
				<div class='flash-message'>{{ Session::get('flash_message') }}</div>
			@endif
			<span>Welcome to Task Manager!</span>
			<a class='login' href='/login'>Log in</a>
			<a class='signup' href='/signup'>Sign up</a>
		@endif

	</div>


	</header>

	<div class='container'>

		@yield('content')

		@yield('body')

		@yield('footer')

	</div>

</body>

</html>
