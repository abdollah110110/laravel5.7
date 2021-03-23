@extends('master')

@section('content')

<h1>Show Article</h1>
<hr />
<h2 class="text-success">{{ $article->title }}</h2>
<p class="text-muted">{{ $article->user->name }}</p>
<p>{!! $article->body !!}</p>
<p>{{ $article->created_at }}</p>
<p>
	<a href="{{ route( 'article.update', ['id' => $article->id] ) }}">Update</a>&nbsp;
	<a href="{{ route('article.delete', ['id' => $article->id]) }}">Delete</a>
</p>

@endsection