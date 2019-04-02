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

		<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success">
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
					<li class="nav-item">
						<a id="contact" class="nav-link" href="#contact_us">تماس با ما</a>
					</li>
				</ul>
			</div>
		</nav>

		<div class="container-fluid bg-white">
			<div class="row">
				<div class="col-md-4 col-lg-2 d-flex justify-content-center  justify-content-lg-start align-items-center">
					<img src="/images/logo.png" class="img-thumbnail p-0 border-0" >
				</div>
				<div class="col-md-4 col-lg-7 d-flex justify-content-center align-items-center">
					<form class="form-inline">
						<input class="form-control" type="search" placeholder="جستجو کنید..." aria-label="جستجو">
						<button class="btn btn-warning rounded-left" type="submit">جستجو</button>
					</form>
				</div>
				<div class="col-md-4 col-lg-3 d-flex justify-content-center  justify-content-lg-start align-items-center">
					<div id="basket" class="w-100 text-center">
						<a href="#">مشاهده سبد خرید</a>
						<span class="badge-pill">5</span>
					</div>
				</div>
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

		<div class="products container-fluid py-5 bg-white">
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

		<div class="container-fluid py-5 bg-white text-center">
			<h2>نام محصول </h2>
			<div class="container">
				<div class="row">
					<div class="border-0">
						<img src="/images/baner.jpg" class="img-thumbnail border-0 p-0 rounded-0"  alt="product picture">
						<div class="card-body">
							<div class="d-flex flex-wrap justify-content-center mb-3">
								<a href="#" class="btn btn-success btn-sm">افزودن به سبد</a>
							</div>
							<p class="text-justify">خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول خلاصه ای از معرفی محصول  </p>
							<div class="d-flex flex-column flex-lg-row justify-content-lg-around mt-5">
								<h3 class="pt-1 pb-3 text-right">
									<span>وزن: </span>
									<span class="text-success">3</span>
									<span class="small">کیلوگرم</span>
								</h3>
								<h3 class="pt-1 pb-3 text-right">
									<span>قیمت: </span>
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h3>
								<div class="pt-1 pb-3">
									<a href="#" class="btn btn-success btn-lg">افزودن به سبد</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="products container-fluid py-5 bg-light">
			<h2>محصولات پیشنهادی  <i class="ti-hand-point-down"></i></h2>
			<div class="container">
				<div class="row">
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
					<div class="col-6 col-sm-4 col-md-3 col-lg-2 product-cover">
						<div class="card proposal">
							<a href="#">
								<img src="/images/baner.jpg" class="w-100"  alt="product picture">
							</a>
							<div class="card-body">
								<a href="#" class="card-title">نام محصول</a>
								<h5 class="card-price">
									<span class="text-success">60000</span>
									<span class="small">تومان</span>
								</h5>
								<a href="#" class="btn btn-primary btn-sm btn-block">توضیحات</a>
								<a href="#" class="btn btn-success btn-sm btn-block">افزودن به سبد</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="footer" class="container-fluid pt-5 bg-dark text-center">
			<div  id="contact_us" class="row flex-column">
				<h2>تماس با ما</h2>
				<p>اگر شما سوالی دارید میتوانید از طریق روشهای زیر سوالتان را بپرسید.</p>
				<p>سعی میکنیم در اولین فرصت جواب دهیم.</p>
			</div>
			<div class="container mt-5">
				<div class="row">
					<div class="col-md-4">
						<div class="d-flex justify-content-center flex-wrap">
							<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
								<i class="ti-twitter-alt"></i>
							</a>
							<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
								<i class="ti-instagram"></i>
							</a>
							<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
								<i class="ti-google"></i>
							</a>
							<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
								<i class="ti-facebook"></i>
							</a>
							<a href="#" class="mt-3">
								<img id="telegram" src="/images/telegram.png" >
							</a>
						</div>
					</div>
					<div class="col-md-8 px-5 text-right">
						<form id="contact_form" name="contact-form" action="mail.php" method="POST">
							<div class="row">
								<div class="col-md-6">
									<div class=" mb-0">
										<label for="name" class="mt-3">نام شما</label>
										<input type="text" id="name" name="name" class="form-control">
									</div>
								</div>
								<div class="col-md-6">
									<div class=" mb-0">
										<label for="email" class="mt-3">ایمیل شما</label>
										<input type="text" id="email" name="email" class="form-control">
									</div>
								</div>
							</div>
							<div class="row mt-3">
								<div class="col-md-12">
									<div class=" mb-0">
										<label for="subject" class="">موضوع پیام</label>
										<input type="text" id="subject" name="subject" class="form-control">
									</div>
								</div>
							</div>
							<div class="row mt-3">

								<div class="col-md-12">
									<div class="">
										<label for="message">متن پیام</label>
										<textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" style="resize:none;"></textarea>
									</div>
								</div>
							</div>
							<div class="row d-flex justify-content-center mt-3">
								<button class="btn btn-lg btn-secondary" type="submit">ارسال</button>
							</div>
						</form>
					</div>
				</div>
				<div class="row justify-content-center end">
					<i class="ti-arrow-circle-up" id="Scroll_to_top" title="برو ابتدای صفحه"></i>
					<p>&COPY; تمامی حقوق این سایت متعلق به <a href="/">{{ config('app.name') }}</a> می باشد.</p>
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
