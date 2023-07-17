<x-site.master-ar title="{{ $news->title_ar }}">
    <x-slot name="meta">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:title" content="{{ $news->title_ar }}">
        <meta property="twitter:title" content="{{ $news->title_ar }}">
        <meta itemprop="name" content="{{ $news->title_ar }}">
        <meta property="og:image" content="{{ asset('uploads/' . $news->image_name) }}">
        <meta name="twitter:image" content="{{ asset('uploads/' . $news->image_name) }}">
        <meta itemprop="image" content="{{ asset('uploads/' . $news->image_name) }}">
        <meta name="description" content="{{ $news->title_ar }}">
        <meta itemprop="description" content="{{ $news->title_ar }}">
        <meta name="twitter:description" content="{{ $news->title_ar }}">
        <meta property="og:description" content="{{ $news->title_ar }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.news.show',$news->slug) }}">
        <meta property="og:url" content="{{ route('site.ar.news.show',$news->slug) }}">
        <meta property="twitter:url" content="{{ route('site.ar.news.show',$news->slug) }}">
    </x-slot>
    <!-- our-news -->
   <!-- page title -->
   <div class="training-bg-ar centered">
    <div class="container">
        <div class="text"> {{ $news->title_ar }}</div>
    </div>
</div>
<!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('site.ar.news') }}">الأخبار</a><i
                    class="fa fa-angle-right"></i>{{ $news->title_ar }}
            </div>
        </div>
    </div>
    <!-- bread crumb end -->


    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container " dir="rtl">
        <div class="container news-detailesar">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>{{ $news->title_ar }}</h3>
                </div>
            </div>
            <div class="row ">
                <div class="col-lg-12">
                    <div class="row">
                        <i class="bi bi-clock"></i>
                        <b>{{ $news->updated_at->format('Y/m/d') }}</b>
                    </div>
                    <div class="row">
                        <p>{!! $news->content_ar !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our news end -->
    </x-site.master>
