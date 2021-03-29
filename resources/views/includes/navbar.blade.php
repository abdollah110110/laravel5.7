<nav class="navbar navbar-expand-lg navbar-dark bg-blue fixed-top">
	<a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">صفحه اصلی</a>
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
			<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
			<button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
		</form>
		<ul class="navbar-nav ml-auto">
			<div class="btn-group">
				<a href="{{ route('register') }}" class="btn btn-success">ثبت نام</a>
				<a href="{{ route('login') }}" class="btn btn-primary">ورود</a>
			</div>
		</ul>
	</div>
</nav>