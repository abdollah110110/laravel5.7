<section id="navbar" class="navbar-fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-0">
        <a class="navbar-brand text-light bg-warning px-3" href="/"><strong>{{ config('app.name') }}</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
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
                @if(!Auth::check())
                <div class="btn-group ml-3">
                    <a class="btn btn-success rounded" href="{{route('register')}}">عضویت</a>
                    <a class="btn btn-primary btn-sm rounded" href="{{route('login')}}">ورود</a>
                </div>
                @else
                <form action="{{route('logout')}}" method="POST" class="form-inline">
                    {{ csrf_field() }}
                    <span class="text-success ml-2">{{ Auth::user()->name }}</span> خوش آمدید
                    <button class="btn btn-danger btn-sm ml-3" type="submit">خروج</button>
                </form>
                @endif
            </div>
        </div>
    </nav>
</section>