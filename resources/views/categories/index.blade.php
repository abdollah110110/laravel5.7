@extends('layouts.master')


@section('title')
- موضوعات
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>موضوعات</h2>
        <a href="{{ route('categories.create') }}" class="btn btn-success">ایجاد موضوع جدید</a>
    </div>
    
    @include('includes.session-flash')
    
    @if(isset($categories) && count($categories) > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="text-center bg-light">
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:80%;">عنوان مقاله</th>
                    <th style="width:5%;">فعال</th>
                    <th style="width:10%;">تنظیمات</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>
                        {{ $i++ }}
                    </td>
                    <td>
                        <a href="{{ route('categories.show', ['id' => $category->id]) }}" class="nav-link p-0 text-info" target="_blank">{{ $category->name }}</a>
                    </td>
                    <td class="text-center">
                        @if($category->active == 1)
                            <i class="ti-check text-success"></i>
                        @elseif($category->active == 0)
                            <i class="ti-close text-danger"></i>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <div class="btn-group">
                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
                                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('آیا مطمئن هستید؟');">حذف</button>
                            </div>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="text-center">
        {{ $categories->render() }}
    </div>
    @else
    <div class="alert alert-warning text-center">
        <h4>هیچ موردی برای نمایش یافت نشد.</h4>
    </div>
    @endif

</div>
@endsection
