<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Posty</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-400">
	<nav class="p-6 bg-white flex justify-between mb-6">
		<ul class="flex items-center">
			<li><a href="/" class="p-3">Home</a></li>
			<li><a href="{{ route('dashboard') }}" class="p-3">Dashboard</a></li>
			<li><a href="{{ route('posts') }}" class="p-3">Post</a></li>
		</ul>
		<ul class="flex items-center">
			<!-- if(auth->user()) -->
			@auth
				<li><a href="" class="p-3">{{ auth()->user()->name }}</a></li>
				<li>
					<form action="{{ route('logout') }}" method="post" class="inline p-3">
						@csrf
						<button type="submit">Logout</a>
					</form>	
				</li>
			@endauth


			<!-- elseif -->
			@guest
				<li><a href="{{ route('login') }}" class="p-3">Login</a></li>
				<li><a href="{{ route('register') }}" class="p-3">Register</a></li>
			@endguest
			<!-- endif -->

		</ul>
	</nav>


	@yield('content')
</body>
</html>