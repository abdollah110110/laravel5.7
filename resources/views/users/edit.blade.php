@component('layouts.master')

@slot('title')
: ویرایش حساب کاربری
@endslot

<div class="container">
    <div class="row justify-content-center">
		<div class="col-10 col-md-5 col-lg-4 border-yellow-5px-padding-1rem">
			<h2>ویرایش حساب کاربری</h2>
			<hr />
			<form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
				{!! csrf_field() !!}
				{!! csrf_token('patch') !!}
				<div class="form-group">
					<label for="name">نام و نام خانوادگی:</label>
					<input id="name" type="text" class="form-control border-0{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ $user->name }}" required autofocus>

					@if ($errors->has('name'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('name') }}</strong>
					</span>
					@endif
				</div>
				<div class="form-group">
					<label for="email">ایمیل:</label>
					<input id="email" type="email" class="form-control border-0{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>

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
				<div class="form-group">
					<input id="isAdmin" type="checkbox" name="isAdmin"{{ ($user->isAdmin === 1 ? ' checked' : '' ) }}>
					<label for="isAdmin">این کاربر ادمین است</label>
				</div>
				<div class="form-group">
					<input id="active" type="checkbox" name="active"{{ ($user->active === 1 ? ' checked' : '' ) }}>
					<label for="active">این کاربر فعال است</label>
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-warning btn-block">ویرایش</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
