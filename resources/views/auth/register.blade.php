@component('layouts.master')

@slot('title')
: ثبت نام کاربر در سایت
@endslot

<div class="container">
    <div class="row justify-content-center">
		<div class="col-10 col-md-5 col-lg-4">
			<h2>ثبت نام</h2>
			<hr />
			<form action="{{ route('register') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="name">نام و نام خانوادگی:</label>
					<input id="name" type="text" class="form-control border-0{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

					@if ($errors->has('name'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
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
					<button type="submit" class="btn btn-success btn-block">ثبت نام</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
