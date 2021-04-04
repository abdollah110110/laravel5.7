@component('layouts.master')

@slot('title')
: موضوعات
@endslot

<div class="container">
	<div class="row">
		<div class="bg-light w-100 p-3 minHeight-500px">
			<div class="d-flex justify-content-between align-items-center">
				<h2 class="mb-2 pb-2 w-100">موضوعات</h2>
				@if(auth()->check() && auth()->user()->isAdmin === 1)
				<div class="col-md-4 col-lg-3 p-0">
					<a href="{{ route('category.create') }}" class="btn btn-block btn-success">ایجاد موضوع جدید</a>
				</div>
				@endif
			</div>
			<hr />
			@if(count($categories) > 0)
					<div class="alert alert-info w-100">
						<div class="row">
						@foreach($categories as $category)
							@if($category->category_id == null)
							<div class="col-md-4">
							<ul>
								<li><strong>{{ $category->name }}</strong></li>
								@if($category->children()->count())
									<ul class="mr-4">
									@foreach($category->children as $child)
										<li>{{ $child->name }}</li>
									@endforeach
									</ul>
								@endif
							</ul>
							</div>
							@endif
						@endforeach
					</div>
				</div>
				@if(auth()->check() && auth()->user()->isAdmin === 1)
				<hr />
				<form action="{{ route('several.delete') }}" method="POST">
					{!! csrf_field() !!}
					{{ method_field('DELETE') }}
					<div class="d-flex w-100 justify-content-end mb-3">
						<button type="submit" class="btn btn-danger" onclick="return confirm('آیا برای حذف مطمئن هستید؟');">حذف همه یا چند مورد</button>
					</div>
					<table class="table border-bottom border-dark">
						<thead class="thead-dark">
							<tr>
								<th scope="col" class="width-50px">#</th>
								<th scope="col" class="width-100px">تصویر</th>
								<th scope="col">نام موضوع</th>
								<th scope="col">
									<input type="checkbox" id="checkAll">
									<span>همه</span>
								</th>
								<th scope="col" class="width-100px">فعال</th>
								<th scope="col" class="text-left width-100px">عملیات</th>
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
								<td>
									@if($category->image !== null)
										<img src="{{ $category->image }}" style="height:100px;">
									@else
										<img src="/images/no-img.jpg" style="height:100px;">
									@endif
								</td>
								<td>{{ $category->name }}</td>
								<td>
									<input type="checkbox" name="category[]" value="{{ $category->id }}">
								</td>
								<td>{!! ($category->active === 1 ? $check : $times) !!}</td>
								<td class="text-left">
									<a href="{{ route('category.show', ['id' => $category->id]) }}" class="btn btn-sm btn-primary mb-1">مشاهده</a>
									<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning mb-1">ویرایش</a>
									<form action="{{ route('category.destroy', ['id' => $category->id]) }}" method="post">
										{!! csrf_field() !!}
										{{ method_field('DELETE') }}
										<button class="btn btn-sm btn-danger" onclick="return confirm('آیا برای حذف این مورد مطمئن هستید؟');">حذف</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</form>
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