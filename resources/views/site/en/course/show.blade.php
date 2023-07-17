<x-site.master title="{{ $course->course_en }}">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="{{ $course->course_en }}">
        <meta property="twitter:title" content="{{ $course->course_en }}">
        <meta itemprop="name" content="{{ $course->course_en }}">

        <meta property="og:image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta name="twitter:image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta itemprop="image" content="{{ asset('uploads/'.$course->course_image) }}">
        <meta name="description" content="{{ $course->course_en }}">
        <meta itemprop="description" content="{{ $course->course_en }}">
        <meta name="twitter:description" content="{{ $course->course_en }}">
        <meta property="og:description" content="{{ $course->course_en }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.course.show',$course->slug) }}">
        <meta property="og:url" content="{{ route('site.en.course.show',$course->slug) }}">
        <meta property="twitter:url" content="{{ route('site.en.course.show',$course->slug) }}">
    </x-slot>
    <!-- our-news -->

    <!-- page title -->
    <div class="training-bg centered">
        <div class="container">
            <div class="text">{{ $course->course_en }}</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('site.en.course') }}">Training</a><i
                    class="fa fa-angle-right"></i> {{ $course->course_en }}
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- About us section -->
    <section class=" sec-pad">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title">
                    <h2>{{ $course->course_en }}</h2>
                </div>
                <div class="title-text"></div>
            </div>
        </div>

        <div class="container centered">
            <div class="row">
                <div class="col">
                    <div class="aboutSec">
                        <img class="trainingImg" src="{{ asset('uploads/' . $course->course_image) }}" alt="">
                    </div>
                </div>
                <d class="col">

                    <div class="aboutTitle">
                        <p>Trainer:{{ $course->instructor_name_en }}</p>
                    </div>


                    <div class="instructor-part">
                        <div class="inst-detailes">
                            <img src="{{ asset('uploads/' . $course->instructor_image) }}" alt="">
                            <span></span>
                            <p>{{ $course->instructor_en }}</p>
                        </div>
                    </div>

            </div>
        </div>
        </div>


        <div class="container training-det">
            <div class="row">
                <div class="col-lg-12">
                    <div class="aboutTitle">
                        <p>Course Objectives</p>
                    </div>
                    <div class="aboutContent">
                        <p>{{ $course->topics_en }}
                        </p>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align: end;">

                </div>
            </div>
        </div>
    </section>

    <div class="container training-det">
        <div class="row">
            <div class="col-lg-12">
                <div class="aboutTitle">
                    <p>Course Topics</p>
                </div>
                <div class="aboutContent">
                    @php
                       $objectives =  json_decode($course->objectives_en)
                    @endphp
                    @foreach ($objectives as $i)
                    <p><i>-</i> {{ $i }} </p>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <!-- About us section end -->
</x-site.master>
