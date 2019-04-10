<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-success">
	<button class="navbar-toggler ml-auto mr-3" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav ml-auto p-lg-0">
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
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
				<a href="{{ route('register') }}" class="text-light">عضویت</a>
			</li>
			<li class="nav-item">
				<span class="mx-2">/</span>
			</li>
			<li class="nav-item">
				<a href="" class="text-light">ورود</a>
			</li>
			<li class="nav-item">
				@if (session('status'))
				<div class="alert alert-success" role="alert">
					{{ session('status') }}
				</div>
				@endif
				<div>کاربر گرامی <span class="text-warning">علی</span>، خوش آمدید</div>
			</li>
		</ul>
	</div>
</nav>