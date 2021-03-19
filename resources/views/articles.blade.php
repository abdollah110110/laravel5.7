<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Laravel</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<a href="/articles">All Articles</a> -
		<a href="/articles/latest">Latest Sevaral Articles</a> -
		<a href="/articles/save">Create New Article</a>
		<hr />
		<h1>Articles</h1>
		<hr />
		@foreach($articles as $article)
		<h2>{{ $article->title }}</h2>
		<p>
			<a href="/articles/update/{{ $article->id }}">Update</a>&nbsp;
			<a href="/articles/delete/{{ $article->id }}">Delete</a>
		</p>
		<p>{{ $article->body }}</p>
		<p>{{ $article->created_at }}</p>
		<br />
		@endforeach
	</body>
</html>
