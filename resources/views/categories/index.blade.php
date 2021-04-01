@component('layouts.master')

@slot('title')
: موضوعات
@endslot

<div class="container">
	<div class="row">
		<div class="bg-light w-100 p-3">
			<h2 class="mb-2 pb-2 w-100">موضوعات</h2>
			<hr />
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">نام موضوع</th>
						<th scope="col" class="width-100px">فعال</th>
						<th scope="col">عملیات</th>
					</tr>
				</thead>
				<tbody>
					@if(count($categories) > 0)
					<?php
					$i = 1;
					$check = '<i class="fas fa-check text-success"></i>';
					$times = '<i class="fas fa-times text-danger"></i>';
					?>
					@foreach($categories as $category)
					<tr>
						<th scope="row">{{ $i++ }}</th>
						<td>{{ $category->name }}</td>
						<td>{!! ($category->active === 1 ? $check : $times) !!}</td>
						<td>
							<div class="btn-group">
								<a href="{{ route('category.show', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">مشاهده</a>
								<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
								<a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-sm btn-danger">حذف</a>
							</div>
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