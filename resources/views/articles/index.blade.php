@extends('layouts.master')


@section('title')
- مقالات
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h2>مقالات</h2>
        <a href="{{ route('articles.create') }}" class="btn btn-success">ایجاد مقاله جدید</a>
    </div>
  
    <hr />
    
    @include('includes.session-flash')
    
    @if(isset($articles) && count($articles) > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="text-center bg-light">
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:70%;">عنوان مقاله</th>
                    <th style="width:10%;">موضوع</th>
                    <th style="width:5%;">فعال</th>
                    <th style="width:10%;">تنظیمات</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <tbody>
                @foreach($articles as $article)
                <tr>
                    <td>
                        {{ $i++ }}
                    </td>
                    <td>
                        <a href="{{ route('articles.show', ['id' => $article->id]) }}" class="nav-link p-0 text-info" target="_blank">{{ $article->title }}</a>
                    </td>
                    <td>{{ $article->category->name }}</td>
                    <td class="text-center">
                        @if($article->active == 1)
                            <i class="ti-check text-success"></i>
                        @elseif($article->active == 0)
                            <i class="ti-close text-danger"></i>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('articles.destroy', ['id' => $article->id]) }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <div class="btn-group">
                                <a href="{{ route('articles.edit', ['id' => $article->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
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
        {{ $articles->render() }}
    </div>
    @else
    <div class="alert alert-warning text-center">
        <h4>هیچ موردی برای نمایش یافت نشد.</h4>
    </div>
    @endif

</div>
@endsection
