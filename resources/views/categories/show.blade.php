@component('layouts.master')

@slot('title')
: مشاهده موضوع
@endslot


<div class="container">
    <div class="row">
		@if(isset($category))
		<div class="bg-light w-100 p-3 minHeight-500px">
			<h2>مشاهده موضوع: <small class="text-primary">{{ $category->name }}</small></h2>
			<hr />
			<div class="row">
				<div class="col-md-3">
					<img src="/images/no-img.jpg" class="img-thumbnail" >
				</div>
				<div class="col-md-6">
					<p><strong>نام موضوع: </strong>{{ $category->name }}</p>
					<p><strong>شاخه اصلی: </strong>{{ ($category->category_id == null ? 'است' : 'نیست' ) }}</p>
					<p><strong>فعال: </strong>{{ ($category->active === 1 ? 'است' : 'نیست' ) }}</p>
				</div>
				<div class="col-md-3 text-left">
					<a href="{{ route('category.index') }}" class="btn btn-secondary btn-block">برگشت به صفحه اصلی موضوعات</a>
					<a href="{{ route('category.edit', ['id' => $category->id]) }}" class="btn btn-warning btn-block">ویرایش دوباره</a>
				</div>
			</div>
		</div>
		@else
		<div class="alert alert-info">چنین موردی وجود ندارد.</div>
		@endif
    </div>
</div>
@endcomponent
