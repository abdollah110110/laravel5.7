@component('layouts.master')

@slot('title')
: کاربران
@endslot

<div class="container">
	<div class="row">
		<h2 class="border-bottom border-dark mb-2 pb-2 w-100">کاربران</h2>
		<div class="bg-light w-100">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">نام و نام خانوادگی</th>
						<th scope="col">ایمیل</th>
						<th scope="col" class="width-100px">ادمین</th>
						<th scope="col" class="width-100px">وضعیت</th>
						<th scope="col" class="width-150px">عملیات</th>
					</tr>
				</thead>
				<tbody>
					@if(count($users) > 0)
					<?php
					$i = 1;
					$check = '<i class="fas fa-check text-success"></i>';
					$times = '<i class="fas fa-times text-danger"></i>';
					?>
					@foreach($users as $user)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $user->name }}</td>
						<td>{{ $user->email }}</td>
						<td>{!! ($user->isAdmin === 1 ? $check : $times) !!}</td>
						<td>{!! ($user->active === 1 ? $check : $times) !!}</td>
						<td>
							<a href="{{ route('user.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
							<a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">حذف</a>
						</td>
					</tr>
					@endforeach
					@else
				<div class="alert alert-info">
					هیچ موردی وجود ندارد.
				</div>
				@endif
				</tbody>
			</table>
		</div>
	</div>
</div>

@endcomponent