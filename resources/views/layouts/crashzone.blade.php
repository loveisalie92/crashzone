<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crashzone</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    @yield('css')
</head>
<body>
	<div class="main-wrapper">
		@include('layouts.partials.header')

		<div id="main-content" class="container-fluid">
			@yield('job-bar')
			@yield('content')
		</div>
	<footer>

	</footer>
	</div>

	<script src="{{ asset('assets/script/pagefunctions.js') }}"></script>
	@yield('script')
</body>
</html>
