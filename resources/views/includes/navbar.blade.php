<section id="navbar">
    <nav class="navbar navbar-expand-lg fixed-top bg-white navbar-light p-0">
        <a class="navbar-brand text-light bg-warning px-3" href="/"><strong>{{ config('app.name') }}</strong></a>
        <button class="navbar-toggler bg-warning" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        @if(!Auth::check())
        <div class="btn-group mr-2">
            <a class="btn btn-success rounded" href="{{route('register')}}">عضویت</a>
            <a class="btn btn-primary btn-sm rounded" href="{{route('login')}}">ورود</a>
        </div>
        @else
        <div class="d-flex align-items-center mr-2">
            <span class="text-success">{{ Auth::user()->name }} </span>گرامی خوش آمدید
            <div class="dropdown mr-2">
                <button type="button" class="btn btn-sm btn-secondary dropdown-toggle" data-toggle="dropdown">
                    <img src="http://www.zenhar.ir/wp-content/uploads/2018/02/%D8%B9%DA%A9%D8%B3-%D9%BE%D8%B1%D9%88%D9%81%D8%A7%DB%8C%D9%84-%D8%B9%D8%A7%D8%B4%D9%82%D8%A7%D9%86%D9%87-9.jpg" class="rounded-circle border" style="width:25px;height:25px;" />
                    مشخصات کاربری
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item text-muted" href="/profile">مشاهده مشخصات</a>
                    <a class="dropdown-item text-muted" href="/profile/edit">ویرایش مشخصات</a>
                </div>
            </div> 
        </div>
        @endif
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="d-flex flex-column flex-lg-row justify-content-between w-100">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="/">صفحه اصلی</a>
                    </li>
                    <?php
                    $categories = \App\Category::latest()->get();
                    ?>
                    @if(count($categories) > 0)
                    @foreach($categories as $category)
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="{{ route('category.selected', ['id' => $category->id]) }}">{{ $category->name }}</a>
                    </li>
                    @endforeach
                    @endif
                </ul>
                @if(Auth::check() && Auth::user()->isAdmin())
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="/categories">موضوعات</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="/articles">مقالات</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-info" href="/users">کاربران</a>
                    </li>
                </ul>
                @endif
            </div>
        </div>
        @if(Auth::check())
        <form action="{{route('logout')}}" method="POST" class="form-inline">
            {{ csrf_field() }}
            <button class="btn btn-danger btn-sm ml-3" type="submit">خروج</button>
        </form>
        @endif
    </nav>
</section>