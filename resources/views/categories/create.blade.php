@extends('layouts.master')


@section('title')
- ایجاد موضوع جدید
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>ایجاد موضوع جدید</h2>
        <a href="{{ route('categories.index') }}" class="btn btn-primary">برگشت به صفحه قبل</a>
    </div>
  
    <hr />
    
    @if(isset($categories) && count($categories) > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="text-center bg-light">
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:80%;">عنوان مقاله</th>
                    <th style="width:15%;">تنظیمات</th>
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
                        <a href="{{ route('categories.show', ['id' => $category->id]) }}" class="nav-link p-0 text-info" target="_blank">{{ $category->title }}</a>
                    </td>
                    <td>
                        <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <div class="btn-group">
                                <a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-sm btn-warning" target="_blank">ویرایش</a>
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
        {{ $categorys->render() }}
    </div>
    @else
    <div class="alert alert-warning text-center">
        <h4>هیچ موردی یافت نشد.</h4>
    </div>
    @endif

</div>
@endsection
