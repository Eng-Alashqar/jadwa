<x-site.master-ar title="التدريب">
    <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="آخر دورات  شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="twitter:title" content="آخر دورات  شركة جدوى للإستشارات وحلول الأعمال .">
        <meta itemprop="name" content="آخر دورات  شركة جدوى للإستشارات وحلول الأعمال .">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.course') }}">
        <meta property="og:url" content="{{ route('site.ar.course') }}">
        <meta property="twitter:url" content="{{ route('site.ar.course') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- page title -->
    <div class="training-bg-ar centered">
        <div class="container">
            <div class="text">التدريب</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">الرئيسية</a><i class="fa fa-angle-left"></i> التدريب
            </div>
        </div>
    </div>
    <!-- bread crumb end -->


    <!-- Start course section  -->
    <section class="training-section">
        <div class="container">
            <div class="news-title centered">
                <div class="section-title training-title">
                    <h2>دورات تدريبية</h2>
                </div>
                <div class="title-text">
                    <p></p>
                </div>
            </div>
            <div class="row" style="display: flex;flex-direction: row-reverse;">
                @foreach ($course as $i)
                    <div class="col-md-3 col-sm-6 col-xs-12 training-colmun">
                        <div class="single-item single-item-training wow fadeInUp animated animated">
                            <div class="img-box"><a href="blog-details.html">
                                    <figure><img src="{{ asset('uploads/' . $i->course_image) }} " alt="">
                                    </figure>
                                </a></div>
                            <div class="training-content">
                                <h4> {{ $i->course_ar }} </h4>
                                <h5>{{ $i->price }}$</h5>
                                <ul class="meta">
                                    <li>
                                        <b>{{ $i->status }}</b>
                                        @if ($i->status == 'Active')
                                            <i class="fa-solid fa-circle active"></i>
                                        @endif

                                        @if ($i->status == 'Full up')
                                            <i class="fa-solid fa-circle start"></i>
                                        @endif

                                        @if ($i->status == 'Expierd')
                                            <i class="fa-solid fa-circle end"></i>
                                        @endif


                                        <b>{{ $i->start_at }}</b>
                                        <i class="fa-regular fa-calendar" aria-hidden="true"></i>

                                    </li>

                                </ul>
                                <div class="course-person">
                                    <div class="left-side">
                                        <span> {{ $i->instructor_name_ar }}</span>
                                        <img src="{{ asset('uploads/' . $i->instructor_image) }}" alt=""
                                            class="trainer-img">

                                    </div>
                                    <div class="rigt-side">
                                        <!-- <button>انضم الآن</button> -->
                                        <a href="{{ route('site.ar.course.show', $i->slug) }}"> المزيد</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- end course section -->



</x-site.master-ar>
