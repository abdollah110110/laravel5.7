@component('layouts.master')

@slot('title')
: ورود کاربر به سایت
@endslot

<div class="container">
    <div class="row justify-content-center">
        <div class="col-10 col-md-5 col-lg-4 border-blue-5px-padding-1rem">
			<h2>ورود کاربر به سایت</h2>
			<hr />
			<form action="{{ route('login') }}" method="POST">
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
					<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
					<label class="form-check-label mr-3" for="remember">مرا به خاطر بسپار</label>
				</div>
				<div class="form-group">
					<a href="{{ route('password.request') }}">رمز عبور را فراموش کرده ام</a>
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-primary btn-block">ورود</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
