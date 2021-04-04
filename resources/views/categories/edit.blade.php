@component('layouts.master')

@slot('title')
: ویرایش موضوع
@endslot

<div class="container">
    <div class="row justify-content-center">
		<div class="col-10 col-md-5 col-lg-5 border-yellow-5px-padding-1rem">
			<h2>ویرایش موضوع {{ $category->name }}</h2>
			<hr />

			@include('includes.errors')

			<form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
				{!! csrf_field() !!}
				{{ method_field('patch') }}
				<div class="form-group{{ $errors->has('name') ? ' alert alert-danger' : '' }}">
					<label for="name">نام موضوع:</label>
					<input id="name" type="text" class="form-control border-0" name="name" value="{{ $category->name }}" required autofocus>
				</div>
				<div class="form-group{{ $errors->has('categoryId') ? ' alert alert-danger' : '' }}">
					<label for="categoryId">انتخاب شاخه:</label>
					<select id="categoryId" type="text" class="form-control border-0" name="categoryId" required autofocus>
						<option value="0">این موضوع شاخه اصلی بشود</option>
						@foreach($categories as $cat)
							<option value="{{ $cat->id }}"{{ ($cat->id == $category->id ? ' selected' : '') }}>{{ $cat->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input id="active" type="checkbox" name="active"{{ ($category->active === 1 ? ' checked' : '' ) }}>
					<label for="active">این موضوع فعال بشود</label>
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-warning btn-block">ویرایش</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
