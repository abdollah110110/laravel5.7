<section id="navbar" class="navbar-fixed-top">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-info" href="/"><strong>{{ config('app.name') }}</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
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
        </div>
    </nav>
</section>