@if($msg = session('success'))
<div class="alert alert-success">
	<p>{{ $msg }}</p>
</div>
@endif