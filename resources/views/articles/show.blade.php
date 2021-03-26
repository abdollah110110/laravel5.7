@component('master2')

	@slot('title')
		{{ $article->title }}
	@endslot

	@if($msg = session('msg'))
		@component('includes.message')
			@slot('class')
				alert alert-success
			@endslot

			@slot('msg')
					{{ $msg }}
			@endslot
		@endcomponent
	@endif

	<h1 class="text-success mt-3">{{ $article->title }}</h1>
	<hr />
	<p><strong>{{ $article->user->name }}</strong></p>
	<p>{!! $article->body !!}</p>
	<p>{{ $article->created_at }}</p>
	@if(count($tags))
	<div>
		Tags:
		@foreach($tags as $tag)
		<a href="{{ route('tagarticles', ['id' => $tag->id]) }}" class="mr-2">{{ $tag->name }}</a>
		@endforeach
	</div>
	@endif
	<div>
	<a href="{{ route( 'article.edit', ['id' => $article->id] ) }}" class="btn btn-lg btn-warning">Update</a>&nbsp;
	<a href="{{ route('article.delete', ['id' => $article->id]) }}" class="btn btn-lg btn-danger" onclick="return confirm('Are you sure?');">Delete</a>
	</div>
	<br />

	<h3>Comments({{ count($article->comments) }})</h3>
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
@endcomponent