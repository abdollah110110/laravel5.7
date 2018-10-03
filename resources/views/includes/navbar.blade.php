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
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="/categories">موضوعات</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="/articles">مقالات</a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <?php 
                $categories = \App\Category::latest()->get();
                ?>
                @if(count($categories) > 0)
                    @foreach($categories as $category)
                        <li class="nav-item active">
                            <a class="nav-link text-info" href="{{ route('category.selected', ['id' => $category->id]) }}">{{ $category->name }}</a>
                        </li>
                    @endforeach
                @endif
            </ul>
                <div class="btn-group">
                    <a class="nav-link text-warning" href="#">ثبت نام</a>
                    <a class="nav-link text-warning" href="#">ورود</a>
                    <a class="nav-link text-warning" href="#">خروج</a>
                </div>
            </div>
        </div>
    </nav>
</section>