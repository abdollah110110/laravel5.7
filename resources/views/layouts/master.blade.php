<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<title>{{ config('app.name', 'Laravel').$title }}</title>

		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- CSRF Token -->
		<meta name="csrf-token" content="{{ csrf_token() }}">

		<link rel="icon" href="/images/favicon.ico">

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="/css/bootstrap.min.css">
		<link rel="stylesheet" href="/css/bootstrap.rtl.css">
		<link rel="stylesheet" href="/css/vazir.css">
		<link rel="stylesheet" href="/css/styles.css">
		<script src="/fonts/fontawesome/js/all.min.js"></script>

	</head>

	<body>
		@include('includes.navbar')

		{{ $slot }}

		@include('includes.footer')

		<!-- Optional JavaScript -->
		<!-- jQuery first, then Popper.js, then Bootstrap JS -->
		<script src="/js/jquery.min.js"></script>
		<!--<script src="/js/poper.js"></script>-->
	   <!--<script src="/js/bootstrap.bundle.min.js"></script>-->
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>