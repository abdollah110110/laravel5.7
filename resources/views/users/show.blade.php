@extends('master')

@section('content')

<h1>Show Article</h1>
<hr />
<h2 class="text-success">{{ $article->title }}</h2>
<p><strong>{{ $article->user->name }}</strong></p>
<p>{!! $article->body !!}</p>
<p>{{ $article->created_at }}</p>
<p>
	<a href="{{ route( 'article.update', ['id' => $article->id] ) }}">Update</a>&nbsp;
	<a href="{{ route('article.delete', ['id' => $article->id]) }}">Delete</a>
</p>
<br />

<h3>Comments</h3>
<hr />
@if(count($article->comments))
	@foreach($article->comments as $comment)
	<div class="alert alert-secondary mb-2">
		<h4>{{ $comment->name }}</h4>
		<p>{{ $comment->body }}</p>
		<small>{{ $comment->created_at }}</small>
	</div>
	@endforeach
	<hr />
@endif

@if(auth()->check())
@include('includes.errors')
<form action="{{ route('comment.store', ['id' => $article->id]) }}" method="post">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="body">Your comment</label>
		<textarea class="form-control" name="body" id="body" rows="3" placeholder="body..." style="resize:none;"></textarea>
	</div>
	<button type="submit" class="btn btn-success">Sent Comment</button>
</form>
@endif
<br />

@endsection