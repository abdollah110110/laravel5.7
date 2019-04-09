@extends('layouts.master')


@section('title')
- صفحه اصلی
@endsection

@include('includes.navbar')
@include('includes.logo-search-basket')


@section('content')
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
@endsection


@section('proposal-products')
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
@endsection