<x-site.master-ar title="المدونة">
    <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="أحدث مقالات شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="twitter:title" content="أحدث مقالات شركة جدوى للإستشارات وحلول الأعمال .">
        <meta itemprop="name" content="أحدث مقالات شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.blog') }}">
        <meta property="og:url" content="{{ route('site.ar.blog') }}">
        <meta property="twitter:url" content="{{ route('site.ar.blog') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- page title -->
    <div class="blog-bg-ar centered">
        <div class="container">
            <div class="text">المدونة</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">الرئيسية</a><i class="fa fa-angle-right"></i> المدونة
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-blog -->
    <section class="our-blog news-section blog-page sidebar-page-container ">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
                    <div class="blog-content">
                        <div class="row" style="display:flex; flex-direction:row-reverse;">
                            @if ($blog)
                                @foreach ($blog as $i)
                                    <div class="col-md-4 col-sm-6 col-xs-12 news-colmun ">
                                        <div class="single-item wow fadeInUp animated animated rtl">
                                            <div class="img-box"><a href="{{ route('site.ar.blog.show', $i->slug) }}">
                                                    <img src="{{ asset('uploads/' . $i->image_name) }}"
                                                        style=" height: 247px; width: 100%;"alt="">
                                                </a>
                                            </div>
                                            <div class="news-content">
                                                <!-- <div class="date">25 <div class="text">Feb</div></div> -->
                                                <ul class="meta">
                                                    <li><i class="fa-solid fa-calendar"
                                                            aria-hidden="true"></i>{{ $i->updated_at->format('Y/m/s') }}
                                                    </li>
                                                    <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                                    <li><i class="fa fa-comments-o" aria-hidden="true"></i>0</li>
                                                </ul>
                                                <h4><a href="{{ route('site.ar.blog.show', $i->slug) }}">{{ $i->title_ar }}
                                                    </a></h4>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our blog end -->
</x-site.master-ar>
