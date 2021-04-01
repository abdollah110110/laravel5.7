@component('layouts.master')

@slot('title')
خطای 404
@endslot

<div class="container">
	<div class="row">
		<div class="col-12 bg-light p-3 minHeight-500px">
			<h2 class="display-1 text-danger">خطای 404</h2>
			<hr />
			<h2>صفحه مورد نظر شما یافت نشد.</h2>
			<a href="{{ route('home') }}">برگشت به صفحه اصلی</a>
		</div>
	</div>
</div>

@endcomponent
