<x-site.master title="Training">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="The latest Jadwa Consulting and Business Solutions courses.">
        <meta property="twitter:title" content="The latest Jadwa Consulting and Business Solutions courses.">
        <meta itemprop="name" content="The latest Jadwa Consulting and Business Solutions courses.">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.course') }}">
        <meta property="og:url" content="{{ route('site.en.course') }}">
        <meta property="twitter:url" content="{{ route('site.en.course') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- page title -->
    <div class="training-bg centered">
        <div class="container">
            <div class="text">Training</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('site.en.index', 'index') }}">Home</a><i class="fa fa-angle-right"></i>
                Training
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- Start course section  -->
    <section class="training-section">
        <div class="container">

            <div class="news-title centered">
                <div class="section-title training-title">
                    <h2>Training Courses</h2>
                </div>
                <div class="title-text">
                    <p></p>
                </div>
            </div>
            <div class="row">
                @foreach ($course as $i)
                    <div class="col-md-3 col-sm-6 col-xs-12 training-colmun">
                        <div class="single-item single-item-training wow fadeInUp animated animated">
                            <div class="img-box " id="bar_tool">
                                <figure><img src="{{ asset('uploads/' . $i->course_image) }} " alt=""></figure>
                            </div>
                            <div class="training-content">
                                <h4>{{ $i->course_en }}</h4>
                                <h5>{{ $i->price }}$</h5>
                                <ul class="meta">
                                    <li>

                                        @if ($i->status == 'Active')
                                            <i class="fa-solid fa-circle active"></i>
                                        @endif

                                        @if ($i->status == 'Full up')
                                            <i class="fa-solid fa-circle start"></i>
                                        @endif

                                        @if ($i->status == 'Expierd')
                                            <i class="fa-solid fa-circle end"></i>
                                        @endif

                                        <b>{{ $i->status }}</b>
                                        <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                                        <b>{{ $i->start_at }}</b>
                                    </li>

                                </ul>
                                <div class="course-person">
                                    <div class="left-side">
                                        <img src="{{ asset('uploads/' . $i->instructor_image) }}" alt=""
                                            class="trainer-img">
                                        <span>{{ $i->instructor_name_en }}</span>
                                    </div>
                                    <div class="rigt-side">
                                        <a class="btn btn-dark "
                                            href="{{ route('site.en.course.show', $i->slug) }}">Read More</a>
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

</x-site.master>
