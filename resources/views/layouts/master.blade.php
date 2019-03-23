<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }} @yield('title')</title>

        <!-- Fonts -->
        <!--<link href="" rel="stylesheet" type="text/css">-->
        <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/css/bootstrap-rtl.css" rel="stylesheet" type="text/css">
        <link href="/css/themify-icons.css" rel="stylesheet" type="text/css">
        <link href="/css/vazir.css" rel="stylesheet" type="text/css">
        <link href="/css/styles.css" rel="stylesheet" type="text/css">

    </head>
    <body>

		<nav class="navbar navbar-expand-md navbar-dark bg-success">
			<a class="navbar-brand" href="#">شاین</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">صفحه اصلی</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">گیاهان دارویی</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">خشکبار</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">صنایع دستی</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							موضوعات
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">گیاهان دارویی</a>
							<a class="dropdown-item" href="#">خشکبار</a>
							<a class="dropdown-item" href="#">صنایع دستی</a>
						</div>
					</li>
<!--					<li class="nav-item">
						<a class="nav-link disabled" href="#">Disabled</a>
					</li>-->
				</ul>
			</div>
		</nav>
		
		<div class="container">
			<div class="row">
				<form class="form-inline">
					<input class="form-control" type="search" placeholder="جستجو کنید..." aria-label="جستجو">
					<button class="btn btn-warning rounded-left" type="submit">جستجو</button>
				</form>
			</div>
		</div>

        @yield('content')

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
