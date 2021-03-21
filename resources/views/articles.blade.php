<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Laravel</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a href="{{ route('home') }}">Home</a> -
		<a href="{{ route('username') }}">Users</a> -
		<a href="{{ route('articles') }}">All Articles</a> -
		<a href="{{ route('articles.latest') }}">Latest Sevaral Articles</a> -
		<a href="{{ route('article.create') }}">Create New Article</a>
		<hr />
		<h1>Articles</h1>
		<hr />
		@foreach($articles as $article)
		<h2><a href="{{ route('article.show', ['articleSlug' => $article->slug]) }}">{{ $article->title }}</a></h2>
		<small>{{ $article->slug }}</small>
		<p>{{ $article->body }}</p>
		<br />
		@endforeach
	</body>
</html>
