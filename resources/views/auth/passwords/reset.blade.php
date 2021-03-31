@component('layouts.master')

@slot('title')
: تغییر رمز عبور
@endslot

<div class="container">
    <div class="row justify-content-center">
		<div class="col-10 col-md-5 col-lg-4 border-yellow-5px-padding-1rem">
			<h2>تغییر رمز عبور</h2>
			<hr />
			<form action="{{ route('password.update') }}" method="POST">
				{!! csrf_field() !!}
				<input type="hidden" name="token" value="{{ $token }}">
				<div class="form-group">
					<label for="email">ایمیل:</label>
					<input id="email" type="email" class="form-control border-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="password">رمز عبور:</label>
					<input id="password" type="password" class="form-control border-0{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

					@if ($errors->has('password'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="password-confirm">تکرار رمز عبور:</label>
					<input id="password-confirm" type="password" class="form-control border-0" name="password_confirmation" required>
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-warning btn-block">تغییر رمز عبور</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
