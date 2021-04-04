@component('layouts.master')

@slot('title')
: ایجاد موضوع
@endslot

<div class="container">
    <div class="row justify-content-center">
		<div class="col-10 col-md-5 col-lg-5 border-green-5px-padding-1rem">
			<h2>ایجاد موضوع </h2>
			<hr />

			@include('includes.errors')

			<form action="{{ route('category.store') }}" method="POST">
				{!! csrf_field() !!}
				<div class="form-group{{ $errors->has('name') ? ' alert alert-danger' : '' }}">
					<label for="name">نام موضوع:</label>
					<input id="name" type="text" class="form-control border-0" name="name" value="{{ old('name') }}" required autofocus>
				</div>
				<div class="form-group{{ $errors->has('categoryId') ? ' alert alert-danger' : '' }}">
					<label for="categoryId">انتخاب شاخه:</label>
					<select id="categoryId" type="text" class="form-control border-0" name="categoryId" required autofocus>
						<option value="0">این موضوع شاخه اصلی بشود</option>
						@foreach($categories as $cat)
							<option value="{{ $cat->id }}">{{ $cat->name }}</option>
						@endforeach
					</select>
				</div>
				<div class="form-group">
					<input id="active" type="checkbox" name="active">
					<label for="active">این موضوع فعال بشود</label>
				</div>
				<div class="form-group mt-5">
					<button type="submit" class="btn btn-success btn-block">ایجاد موضوع</button>
				</div>
			</form>
		</div>
    </div>
</div>
@endcomponent
