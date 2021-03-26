<!doctype html>
<html lang="en">
	<head>
		<title>Email</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">
		<link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<!--<link href="/css/bootstrap.rtl.css" rel="stylesheet" type="text/css">-->
		<link href="/css/vazir.css" rel="stylesheet">
		<link href="/font/fontawesome/css/all.min.css" rel="stylesheet">
		<script defer src="/font/fontawesome/js/all.min.js"></script>
		<link href="/css/styles.css" rel="stylesheet" type="text/css">
	</head>

	<body>

		<h1 class="text-success">Dear {{ $user->name }}</h1>
		<h2>Your email send successfully.</h2>
		<p class="border border-1 rounded bg-secondary">{{ $body }}</p>
		<h4 class="text-danger">Thank you.</h4>

	</body>
</html>
