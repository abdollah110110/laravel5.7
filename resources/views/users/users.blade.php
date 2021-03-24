@extends('master')

@section('content')
<div class="row">
	@foreach($users as $user)
	<div class="col-6">
		<div class="border rounded m-1 p-1">
			<h2><a href="{{ route('user.show', ['user' => $user->id]) }}">{{ $user->name }}</a></h2>
			<p><a href="{{ route('userarticles', ['id' => $user->id]) }}">Articles ({{ $user->articles()->count() }})</a></p>
		</div>
	</div>
	@endforeach
</div>
@if(isset($users->render))
<div class="d-flex justify-content-center my-3">{!! $users->render() !!}</div>
@endif
@endsection