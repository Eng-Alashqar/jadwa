<x-site.master-ar title="{{ $course->course_ar}}">
    <x-slot name="meta">
        <meta property="og:site_name" content="{{ config('app.name') }}">
        <meta property="og:title" content="{{ $course->course_ar }}">
        <meta property="twitter:title" content="{{ $course->course_ar }}">
        <meta itemprop="name" content="{{ $course->course_ar }}">

        <meta property="og:image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta name="twitter:image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta itemprop="image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta name="description" content="{{ $course->course_ar }}">
        <meta itemprop="description" content="{{ $course->course_ar }}">
        <meta name="twitter:description" content="{{ $course->course_ar }}">
        <meta property="og:description" content="{{ $course->course_ar }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.course.show',$course->slug) }}">
        <meta property="og:url" content="{{ route('site.ar.course.show',$course->slug) }}">
        <meta property="twitter:url" content="{{ route('site.ar.course.show',$course->slug) }}">
    </x-slot>
    <!-- our-news -->

    <!-- page title -->
    <div class="training-bg-ar centered">
        <div class="container">
            <div class="text">{{ $course->course_ar }}</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('site.ar.course') }}">الدورات</a><i class="fa fa-angle-left"></i> {{ $course->course_ar }}
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- About us section -->
    <section class=" sec-pad">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title">
                    <h2> {{ $course->course_ar }}</h2>
                </div>
                <div class="title-text"></div>
            </div>
        </div>

        <div class="container centered" dir="rtl">
            <div class="row">
                <div class="col">
                    <div class="aboutSec">
                        <img class="trainingImg" src="{{ asset('uploads/'.$course->course_image) }}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="aboutTitle">
                        <p>{{ $course->instructor_name_ar }}:المدرب</p>
                    </div>
                    <div class="instructor-part">
                        <div class="inst-detailes">
                            <img src="{{asset('uploads/'.$course->instructor_image)}}" alt="">
                            <span></span>
                            <p>{{$course->instructor_ar}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container training-det">
            <div class="row">
                <div class="col-lg-12" dir="rtl">
                    <div class="aboutTitle">
                        <p>أهداف التدريب</p>
                    </div>
                    <div class="aboutContent">
                        <p>{{$course->topics_ar}}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: center;">
                </div>
            </div>
        </div>
    </section>

    <div class="container training-det">
        <div class="row" dir="rtl">
            <div class="col-lg-12">
                <div class="aboutTitle">
                    <p>موضوعات التدريب</p>
                </div>
                <div class="aboutContent">
                    @php
                    $objectives =  json_decode($course->objectives_ar)
                 @endphp
                 @foreach ($objectives as $i)
                 <p><i>-</i> {{ $i }} </p>
                 @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- About us section end -->

</x-site.master-ar>
