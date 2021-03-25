@extends('master')

@section('content')

<h1>Create Article</h1>
<hr />

@include('includes.errors')

<form action="{{ route('article.store') }}" method="post">
	{!! csrf_field() !!}
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" class="form-control" name="title" id="title" placeholder="title..." value="{{ old('title') }}">
	</div>
	<div class="form-group">
		<label for="body">Body</label>
		<textarea class="form-control" name="body" id="body" rows="3" placeholder="body..." style="resize:none;">{{ old('body') }}</textarea>
	</div>
	<div class="form-group">
		<label for="tags">Tags</label>
		<div class="row">
		@foreach($tags as $tag)
			<div class="col-2">
				<input type="checkbox" name="tags[]" value="{{ $tag->id }}" /> {{ $tag->name }}
			</div>
		@endforeach
		</div>
	</div>
	<button type="submit" class="btn btn-success">Create Article</button>
</form>

@endsection