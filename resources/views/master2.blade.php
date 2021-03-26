<!doctype html>
<html lang="en">
	<head>
		<title>LEARN{{ ' - ' . $title }}</title>
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

		<header>
			@include('includes.navbar')
		</header>

		<!-- Begin page content -->
		<main role="main">

			<!-- Main jumbotron for a primary marketing message or call to action -->
<!--			<div class="jumbotron">
				<div class="container">
					<h1 class="display-3">Hello, world!</h1>
					<p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
					<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
				</div>
			</div>-->

			<div class="container">
				<!-- Example row of columns -->
				{{ $slot }}
			</div> <!-- /container -->

		</main>

		<footer class="footer">
			<div class="container">
				<span class="text-muted">Place sticky footer content here.</span>
			</div>
		</footer>

		<!-- Bootstrap core JavaScript
		================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="/js/jquery.min.js" type="text/javascript"></script>
		<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
		<script src="/js/popper.min.js"></script>
		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>

