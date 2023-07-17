<x-site.master title="News">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="The latest news of Jadwa Consulting and Business Solutions.">
        <meta property="twitter:title" content="The latest news of Jadwa Consulting and Business Solutions.">
        <meta itemprop="name" content="The latest news of Jadwa Consulting and Business Solutions.">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.news') }}">
        <meta property="og:url" content="{{ route('site.en.news') }}">
        <meta property="twitter:url" content="{{ route('site.en.news') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- our-news -->

    <!-- page title -->
    <div class="blog-details-bg centered">
        <div class="container">
            <div class="text">Jadwa News</div>
        </div>
    </div>
    <!-- end page title -->
    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text">
                <a href="index.html">Home</a><i class="fa fa-angle-right"></i>Jadwa
                News
            </div>
        </div>
    </div>
    <!-- bread crumb end -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>Last News</h3>
                    <hr>
                </div>
            </div>
            <div class="row">

                @foreach ($news as $i)
                    <div class="col-md-6">
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
                        <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side">
                            <div class="row">
                                <i class="bi bi-clock"></i>
                                <b>{{ $i->updated_at->format('Y/m/d') }}</b>
                            </div>
                            <div class="row">
                                <p>{{ $i->title_en }}<a type="button"
                                        href="{{ route('site.en.news.show', $i->slug) }}"
                                        class="btn btn-link text-decoration-none border-0">Read more..</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            {{ $news->links() }}
        </div>
    </section>
    <!-- our news end -->

</x-site.master>
