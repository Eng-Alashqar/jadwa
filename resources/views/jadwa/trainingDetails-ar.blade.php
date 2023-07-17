@extends('jadwa.master_ar')
@section('title','التدريب')
@section('content')

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
            <div class="text"><a href="{{ route('jadwa.index', $page='index_ar') }}">الرئيسية</a><i class="fa fa-angle-left"></i> {{ $course->course_ar }}
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
                    <p><i>-</i> {{ $course->objectives1_ar }} </p>
                    <p><i>-</i> {{ $course->objectives2_ar }} </p>
                    <p><i>-</i> {{ $course->objectives3_ar }} </p>
                    <p><i>-</i> {{ $course->objectives4_ar }} </p>
                    <p><i>-</i> {{ $course->objectives5_ar }} </p>
                    <p><i>-</i> {{ $course->objectives6_ar }} </p>


                </div>
            </div>
        </div>
    </div>
    <!-- About us section end -->

@stop
