@extends('master')

@section('content')
<div class="row">
	@foreach($articles as $article)
	<div class="col-6">
		<div class="border rounded m-1 p-1">
			<h2><a href="{{ route('article.show', ['article' => $article->id]) }}">{{ $article->title }}</a></h2>
			<small>{{ $article->slug }}</small>
			<p>{{ $article->body }}</p>
			<p><a class="btn btn-secondary" href="{{ route('article.show', ['article' => $article->id]) }}" role="button">View details »</a></p>
		</div>
	</div>
	@endforeach
</div>
@if(isset($articles->render))
<div class="d-flex justify-content-center my-3">{!! $articles->render() !!}</div>
@endif
@endsection