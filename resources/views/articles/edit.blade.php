@extends('master')

@section('content')

<h1>Edit Article</h1>
<hr />

@include('includes.errors')

<form action="{{ route('article.update', ['id' => $article->id]) }}" method="post">
	{!! csrf_field() !!}
	{{ method_field('patch') }}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" id="title" placeholder="title..." value="{{ $article->title }}">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" id="body" rows="3" placeholder="body..." style="resize:none;">{{ $article->body  }}</textarea>
	</div>
	<div class="form-group">
		<label for="tags">Tags</label>
			@if(count($tags))
				<div class="row">
				@foreach($tags as $tag)
					<div class="col-2">
						<input type="checkbox" name="tags[]" value="{{ $tag->id }}" {{ in_array($tag->id, $article->tags()->pluck('id')->toArray()) ? 'checked' : '' }} /> {{ $tag->name }}
					</div>
				@endforeach
				</div>
			@else
			<span class="text-warning">There are not tags.</span>
			@endif
	</div>
	<button type="submit" class="btn btn-warning">Update Article</button>
</form>

@endsection