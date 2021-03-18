<!doctype html>
<html lang="{{ app()->getLocale() }}">
	<head>
		<title>Laravel</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	<body>
		<h1>Home</h1>
		<p><strong>Users: </strong>
		<ul>
			@foreach($names as $name)
			<li>{{ $name }}</li>
			@endforeach
		</ul>
	</p>
</body>
</html>
