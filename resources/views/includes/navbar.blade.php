<!-- Fixed navbar -->
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
	<a class="navbar-brand" href="{{ route('home') }}">LEARN</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse justify-content-between" id="navbarsExampleDefault">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="{{ route('home') }}">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="{{ route('users') }}">All Users</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Articles</a>
				<div class="dropdown-menu" aria-labelledby="dropdown01">
					<a class="dropdown-item" href="{{ route('articles') }}">All Articles</a>
					<a class="dropdown-item" href="{{ route('articles.latest') }}">Latests Articles</a>
					@if(auth()->check())
					<a class="dropdown-item" href="{{ route('userarticles', ['id' => auth()->user()->id]) }}">{{ auth()->user()->name }}'s Articles</a>
					@endif
					<a class="dropdown-item" href="{{ route('article.create') }}">Create Article</a>
				</div>
			</li>
		</ul>
		<ul class="navbar-nav">
			@if(!auth::checK())
			<li class="nav-item">
				<a class="btn btn-success" href="{{ route('register') }}">Register</a>
			</li>
			<li class="nav-item">
				<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
			</li>
			@else
			<li class="nav-item">
				<form action="{{ route('logout') }}" method="post">
					{!! csrf_field() !!}
					<span class="text-warning">{{ auth()->user()->name }}</span>
					<button class="btn btn-danger" onclick="return confirm('Are you sure?');">Logout</button>
				</form>
			</li>
			@endif
		</ul>
		<form class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav>