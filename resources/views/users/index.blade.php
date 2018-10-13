@extends('layouts.master')


@section('title')
- کاربران
@endsection


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center py-4">
        <h2>کاربران</h2>
    </div>
  
    @include('includes.session-flash')
    
    @if(isset($users) && count($users) > 0)
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="text-center bg-light">
                <tr>
                    <th style="width:5%;">#</th>
                    <th style="width:30%;">نام</th>
                    <th style="width:50%;">ایمیل</th>
                    <th style="width:5%;">فعال</th>
                    <th style="width:10%;">تنظیمات</th>
                </tr>
            </thead>
            <?php $i = 1; ?>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>
                        {{ $i++ }}
                    </td>
                    <td>
                        {{ $user->name }}
                    </td>
                    <td>{{ $user->email }}</td>
                    <td class="text-center">
                        @if($user->active == 1)
                            <i class="ti-check text-success"></i>
                        @elseif($user->active == 0)
                            <i class="ti-close text-danger"></i>
                        @endif
                    </td>
                    <td>
                        <form action="{{ route('users.destroy', ['id' => $user->id]) }}" method="POST">
                            {!! csrf_field() !!}
                            {{ method_field('DELETE') }}
                            <div class="btn-group">
                                <a href="{{ route('users.edit', ['id' => $user->id]) }}" class="btn btn-sm btn-warning">ویرایش</a>
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
        {{ $users->render() }}
    </div>
    @else
    <div class="alert alert-warning text-center">
        <h4>هیچ موردی برای نمایش یافت نشد.</h4>
    </div>
    @endif

</div>
@endsection
