@component('layouts.master')

@slot('title')
: فراموشی رمز عبور
@endslot

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-5 col-lg-4 border-blue-5px-padding-1rem">
			<h2>فراموشی رمز عبور</h2>
			<hr />
			@if (session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
			@endif
			<form action="{{ route('password.email') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="email">ایمیل:</label>
					<input id="email" type="email" class="form-control border-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-primary btn-block">ارسال ایمیل درخواست رمز عبور</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
