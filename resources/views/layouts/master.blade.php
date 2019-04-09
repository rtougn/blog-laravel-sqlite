<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('head.title')</title>
	<link rel="stylesheet" type="text/css" href="{{ url('/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ url('/css/style.css') }}">
	<script src="{{ url('/js/bootstrap.min.js') }}"></script>
</head>
<body>
	@include ('partials.navbar')
	<h1 class="text-center">Welcome to Blog & News</h1>
	<div id="content" class="container">
	@yield('body.content')
	</div>
	@include ('partials.footer')
</body>
</html>