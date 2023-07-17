<x-site.master-ar title="الأخبار">
        <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="آخر اخبار شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="twitter:title" content="آخر اخبار شركة جدوى للإستشارات وحلول الأعمال .">
        <meta itemprop="name" content="آخر اخبار شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.news') }}">
        <meta property="og:url" content="{{ route('site.ar.news') }}">
        <meta property="twitter:url" content="{{ route('site.ar.news') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>

    <!-- page title -->
    <div class="training-bg-ar centered" >
        <div class="container" >
            <div class="text" style="width: 20% ;">آخبار جدوى</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">الرئيسية</a><i class="fa fa-angle-left"></i> آخبار جدوى
            </div>
        </div>
    </div>
    <!-- bread crumb end -->



    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container" dir="rtl">
        <div class="container">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>آخر الأخبار</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $i)
                    <div class="col-md-6">
                        <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side">
                            <div class="row">
                                <i class="bi bi-clock"></i>
                                <b>{{ $i->updated_at->format('Y|m|d') }}</b>
                            </div>
                            <div class="row">
                                <p>{{ $i->title_ar }}<a type="button"
                                        href="{{ route('site.ar.news.show', $i->slug) }}"
                                        class="btn btn-link text-decoration-none border-0">اقرأ المزيد ..</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                            <div class="blog-single-section sidebar-details">
                                <div class="news-style-one">
                                    <div class="single-item wow fadeInUp animated animated">
                                        <div class="img-box">
                                            <figure>
                                                <img src="{{ asset('uploads/' . $i->image_name) }}" alt=""
                                                    height="170">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- our news end -->
</x-site.master-ar>
