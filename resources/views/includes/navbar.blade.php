<nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
	<a class="navbar-brand" href="{{ route('home') }}">{{ config('app.name', 'Laravel') }}</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('home') }}">صفحه اصلی</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">مقالات</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					موضوعات
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="#">موضوع اول</a>
					<a class="dropdown-item" href="#">موضوع دوم</a>
					<a class="dropdown-item" href="#">موضوع سوم</a>
				</div>
			</li>
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2 border-0 rounded-0" type="search" placeholder="جستجو" aria-label="جستجو">
			<button class="btn btn-secondary my-2 my-sm-0 rounded-0" type="submit">جستجو</button>
		</form>
		<ul class="navbar-nav mr-auto">
			@if(!auth()->check())
			<div class="btn-group">
				<a href="{{ route('register') }}" class="btn btn-success rounded-0">ثبت نام</a>
				<a href="{{ route('login') }}" class="btn btn-primary rounded-0">ورود</a>
			</div>
			@else
			<form action="{{ route('logout') }}" method="post">
				{!! csrf_field() !!}
				<button type="submit" class="btn btn-danger rounded-0">خروج از حساب کاربری ({{ auth()->user()->name }})</button>
			</form>
			@endif
		</ul>
	</div>
</nav>