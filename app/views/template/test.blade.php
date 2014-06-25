<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<link rel="stylesheet" href="{{ URL::asset('bootstrap/dist/css/bootstrap.min.css') }}" media="all" />
	<title>@yield('title')</title>
</head>
<body>
	<div class="container-fluid">
		@if(Session::has('message'))
			<p>{{ Session::get('message') }}</p>
		@endif
		@yield('content')
	</div>
	test
	<script src="{{ URL::asset('jquery/dist/jquery.min.js') }}"></script>
	<script src="{{ URL::asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>