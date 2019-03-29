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

		<nav class="navbar navbar-expand-lg navbar-dark bg-success">
			<a class="navbar-brand" href="/">{{ config('app.name') }}</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="/">صفحه اصلی</a>
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

		<div id="slider" class="container-fluid">
			<div class="row">
				<!-- The carousel -->
				<div id="myCarousel" class="carousel slide">
					<!-- Indicators -->
					<ul class="carousel-indicators">
						<li class="item1 active"></li>
						<li class="item2"></li>
						<li class="item3"></li>
					</ul>
					<!-- The slideshow -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<a href="#">
								<img src="holder.js/1500x400?bg=be2edd" class="w-100" alt="slide1">
							</a>
						</div>
						<div class="carousel-item">
							<a href="#">
								<img src="holder.js/1500x400?bg=007700" class="w-100" alt="slide1">
							</a>
						</div>
						<div class="carousel-item">
							<a href="#">
								<img src="holder.js/1500x400?bg=000077" class="w-100" alt="slide1">
							</a>
						</div>
					</div>
					<!-- Left and right controls -->
					<a class="carousel-control-prev" href="#myCarousel">
						<span class="carousel-control-prev-icon"></span>
					</a>
					<a class="carousel-control-next" href="#myCarousel">
						<span class="carousel-control-next-icon"></span>
					</a>
				</div>
			</div>
		</div>

		<div id="products" class="container-fluid py-5">
			<h2>محصولات  <i class="ti-hand-point-down"></i></h2>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
					<div class="col-sm-6 col-lg-3 product-cover">
							<div class="card">
								<img src="/images/baner.jpg"  alt="product picture">
								<div class="card-body">
									<a href="#" class="card-title">نام محصول</a>
									<p class="card-text">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  ...</p>
									<h3 class="card-price">
										<span class="text-success">60000</span>
										<span class="small">تومان</span>
									</h3>
									<div class="d-flex flex-wrap justify-content-between">
										<a href="#" class="btn btn-primary btn-sm">توضیحات بیشتر</a>
										<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
									</div>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>


        @yield('content')

        <script src="/js/jquery.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/holder.js"></script>
        <script src="/js/scripts.js"></script>
    </body>
</html>
