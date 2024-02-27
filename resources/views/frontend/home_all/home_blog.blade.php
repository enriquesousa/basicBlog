@php
    // $blogs = App\Models\Blog::latest()->get()->take(3);
    $blogs = App\Models\Blog::latest()->limit(3)->get();
@endphp

<!-- 06a - BLOG - blog-area -->
<section class="blog">

    <div class="container">
        <div class="row gx-0 justify-content-center">

            @foreach ($blogs as $item)
                <div class="col-lg-4 col-md-6 col-sm-9">
                    <div class="blog__post__item">
                        <div class="blog__post__thumb">
                            <a href="{{ route('blog.details', $item->id) }}"><img src="{{ asset($item->blog_image) }}" alt="" width="430px" height="327px" title="{{ $item->blog_title }}"></a>
                            <div class="blog__post__tags" title="Categoría">
                                <a>{{ $item->category->blog_category }}</a>
                            </div>
                        </div>
                        <div class="blog__post__content">
                            <span class="date">{{ \Carbon\Carbon::parse($item->created_at)->locale('es')->isoFormat('D[/]MMM[/]YYYY') }}</span>
                            <h3 class="title" title="{{ $item->blog_title }}"><a href="{{ route('blog.details', $item->id) }}">{{ Str::limit($item->blog_title, 20); }}</a></h3>
                            <a href="{{ route('blog.details', $item->id) }}" class="read__more">LEER MÁS</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <div class="blog__button text-center">
            <a href="blog.html" class="btn">more blog</a>
        </div>

    </div>

</section>
<!-- blog-area-end -->
