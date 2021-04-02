@component('layouts.master')

@slot('title')
: موضوعات
@endslot

<div class="container">
	<div class="row">
		<div class="bg-light w-100 p-3 minHeight-500px">
			<h2 class="mb-2 pb-2 w-100">موضوعات</h2>
			<hr />
			@if(count($categories) > 0)
				@if(auth()->check() && auth()->user()->isAdmin === 1)
				<table class="table">
					<thead class="thead-dark">
						<tr>
							<th scope="col">#</th>
							<th scope="col" class="width-100px">تصویر</th>
							<th scope="col">نام موضوع</th>
							<th scope="col" class="width-100px">فعال</th>
							<th scope="col" class="text-left">عملیات</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 1;
						$check = '<i class="fas fa-check text-success"></i>';
						$times = '<i class="fas fa-times text-danger"></i>';
						?>
						@foreach($categories as $category)
						<tr>
							<th scope="row">{{ $i++ }}</th>
							<td>{!! ($category->image !== null ? '<img src="{{ $category->image }}" style="height:100px;">' : '<img src="/images/no-img.jpg" style="height:100px;">') !!}</td>
							<td>{{ $category->name }}</td>
							<td>{!! ($category->active === 1 ? $check : $times) !!}</td>
							<td class="text-left">
								<div class="btn-group">
									<a href="{{ route('category.show', ['id' => $category->id]) }}" class="btn btn-sm btn-primary">مشاهده</a>
									<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
									<a href="{{ route('category.destroy', ['id' => $category->id]) }}" class="btn btn-sm btn-danger" onclick="return conform('آیا برای حذف این مورد مطمئن هستید؟');">حذف</a>
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@else
				<div class="row">
					@foreach($categories as $category)
						@if($category->category_id == null)
						<div class="col-md-4">
						<ul>
							<li>{{ $category->name }}</li>
							@if($category->children()->count())
								<ul class="mr-4">
								@foreach($category->children as $child)
									<li>{{ $child->name }}</li>
								@endforeach
								</ul>
							@else
								?
							@endif
						</ul>
						</div>
						@endif
					@endforeach
				</div>
				@endif
			@else
			<div class="alert alert-info">
			هیچ موردی وجود ندارد.
			</div>
			@endif
		</div>
	</div>
</div>

@endcomponent