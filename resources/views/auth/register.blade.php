@extends('layouts.master')


@section('title')
- عضویت
@endsection

@include('includes.navbar')
@include('includes.logo-search-basket')


@section('breadcrumb')
<ul class="breadcrumb">
	<li><a href="/">صفحه اصلی</a></li>
	<li>عضویت</li>
</ul> 
@endsection


@section('content')
<div class="container-fluid py-5 bg-white">
	<h2>عضویت در سایت</h2>
	<div class="container mt-5 text-center">
		<p class="bg-info text-white p-2 mb-5">موارد مشخص شده با <span class="text-danger px-1">*</span>الزامی می باشند</p>
		<div class="row">
			<form action="{{ route('register.post') }}" method="POST" class="form-horizontal w-100">
				{{ csrf_field() }}
				<div class="form-group row {{ $errors->has('first_name') ? 'has-error text-danger' : '' }}">
					<label for="first_name" class="col-lg-2 col-form-label text-right text-lg-left">
						<span class="text-danger pl-1">*</span>
						<span>نام:</span>
					</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" name="first_name" value="{{ old('first_name') }}" placeholder="نام را وارد کنید...">
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('first_name'))
						<small>{{ $errors->first('first_name') }}</small>
						@else
						<small class="text-info">کمتر از سه حرف نباشد | فقط حروف فارسی قابل قبول است</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('last_name') ? 'has-error text-danger' : '' }}">
					<label for="last_name" class="col-lg-2 col-form-label text-right text-lg-left">
						<span class="text-danger pl-1">*</span>
						<span>نام خانوادگی:</span>
					</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" name="last_name" value="{{ old('last_name') }}" placeholder="نام خانوادگی را وارد کنید...">
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('last_name'))
						<small>{{ $errors->first('last_name') }}</small>
						@else
						<small class="text-info">کمتر از سه حرف نباشد | فقط حروف فارسی قابل قبول است</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('email') ? 'has-error text-danger' : '' }}">
					<label for="email" class="col-lg-2 col-form-label text-right text-lg-left">ایمیل:</label>
					<div class="col-lg-6">
						<input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="ایمیل را وارد کنید...">
					</div>
					<div class="col-lg-4 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('email'))
						<small>{{ $errors->first('email') }}</small>
						@else
						<small class="text-info">برای مثال: ali2018@yahoo.com</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('password') ? 'has-error text-danger' : '' }}">
					<label for="password" class="col-lg-2 col-form-label text-right text-lg-left">رمز عبور:</label>
					<div class="col-lg-5">
						<input class="form-control" type="password" name="password" placeholder="رمز عبور را وارد کنید...">
					</div>
					<div class="col-lg-5 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('password'))
						<small>{{ $errors->first('password') }}</small>
						@else
						<small class="text-info">باید بیشتر از 6 حرف باشد.</small>
						@endif
					</div>
				</div>
				<div class="form-group row">
					<label for="password_confirmation" class="col-lg-2 col-form-label text-right text-lg-left">تکرار رمز عبور:</label>
					<div class="col-lg-5">
						<input class="form-control" type="password" name="password_confirmation" placeholder="تکرار رمز عبور را وارد کنید...">
					</div>
					<div class="col-lg-5 d-flex align-items-lg-center mt-sm-1">
						<small class="text-info">باید بیشتر از 6 حرف باشد و دقیقاً حرفهای رمز عبور را داشته باشد.</small>
					</div>
				</div>
				<div class="form-group row {{ $errors->has('mobile') ? 'has-error text-danger' : '' }}">
					<label for="mobile" class="col-lg-2 col-form-label text-right text-lg-left">
						<span class="text-danger pl-1">*</span>
						<span>موبایل:</span>
					</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" name="mobile" value="{{ old('mobile') }}" placeholder="شماره موبایل را وارد کنید...">
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('mobile'))
						<small>{{ $errors->first('mobile') }}</small>
						@else
						<small class="text-info">فقط اعداد قابل قبول است</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('phone') ? 'has-error text-danger' : '' }}">
					<label for="phone" class="col-lg-2 col-form-label text-right text-lg-left">
						<span>تلفن ثابت:</span>
					</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" name="phone" value="{{ old('phone') }}" placeholder="شماره تلفن را وارد کنید...">
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('phone'))
						<small>{{ $errors->first('phone') }}</small>
						@else
						<small class="text-info">فقط اعداد قابل قبول است</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('post_code') ? 'has-error text-danger' : '' }}">
					<label for="post_code" class="col-lg-2 col-form-label text-right text-lg-left">
						<span class="text-danger pl-1">*</span>
						<span>کد پستی:</span>
					</label>
					<div class="col-lg-4">
						<input class="form-control" type="text" name="post_code" value="{{ old('post_code') }}" placeholder="کد پستی را وارد کنید...">
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('post_code'))
						<small>{{ $errors->first('post_code') }}</small>
						@else
						<small class="text-info">فقط اعداد قابل قبول است</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('state') ? 'has-error text-danger' : '' }}">
					<label for="state" class="col-lg-2 col-form-label text-right text-lg-left">استان:</label>
					<div class="col-lg-4">
						<select class="form-control rounded-left" name="state">
							<option value="اردبیل">اردبیل</option>
							<option value="تهران">تهران</option>
						</select>
					</div>
					<div class="col-lg-6 d-flex align-items-lg-center mt-sm-1">
						@if($errors->has('state'))
						<small>{{ $errors->first('state') }}</small>
						@endif
					</div>
				</div>
				<div class="form-group row {{ $errors->has('address') ? 'has-error text-danger' : '' }}">
					<label for="address" class="col-lg-2 col-form-label text-right text-lg-left">آدرس:</label>
					<div class="col-lg-5">
						<textarea class="form-control" name="address" rows="3" style="resize:none;" placeholder="آدرس کامل خود را وارد کنید..."></textarea>
					</div>
					<div class="col-lg-5 d-flex align-items-lg-start mt-sm-1">
						@if($errors->has('address'))
						<small>{{ $errors->first('address') }}</small>
						@else
						<small class="text-info">نام شهر و آدرس کامل و دقیق خود را وارد کنید</small>
						@endif
					</div>
				</div>
				<div class="d-flex justify-content-center mt-5">
					<button type="submit" class="btn btn-success btn-lg px-5">عضویت</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
