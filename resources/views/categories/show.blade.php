@component('layouts.master')

@slot('title')
: مشاهده حساب کاربری
@endslot

<div class="container">
    <div class="row">
		<div class="bg-light w-100 p-3 minHeight-500px">
			<h2>مشاهده حساب کاربری <small class="text-primary">{{ $user->name }}</small></h2>
			<hr />
			<div class="row">
				<div class="col-md-3">
					<img src="/images/no-img.jpg" class="img-thumbnail" >
				</div>
				<div class="col-md-6">
					<p><strong>نام: </strong>{{ $user->name }}</p>
					<p><strong>ایمیل: </strong>{{ $user->email }}</p>
					@if(auth()->user()->isAdmin === 1)
					<p><strong>نوع کاربری: </strong>{{ ($user->isAdmin === 1 ? 'ادمین' : 'کاربر' ) }}</p>
					<p><strong>فعال: </strong>{{ ($user->active === 1 ? 'فعال' : 'غیر فعال' ) }}</p>
					@endif
				</div>
				<div class="col-md-3 text-left">
					<a href="{{ route('users.all') }}" class="btn btn-secondary">برگشت به صفحه اصلی کاربران</a>
				</div>
			</div>
		</div>
    </div>
</div>
@endcomponent
