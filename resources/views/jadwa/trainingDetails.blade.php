@extends('jadwa.master')
@section('title','Course')
@section('content')


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
            <div class="text"><a href="{{ route('jadwa.index', $page='index') }}">Home</a><i class="fa fa-angle-right"></i> {{ $course->course_en }}
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
                        <img class="trainingImg" src="{{ asset('uploads/'.$course->course_image) }}" alt="">
                    </div>
                </div>
                <d class="col">

                        <div class="aboutTitle">
                            <p>Trainer:{{ $course->instructor_name_en }}</p>
                        </div>


                    <div class="instructor-part">
                        <div class="inst-detailes">
                            <img src="{{asset('uploads/'.$course->instructor_image)}}" alt="">
                            <span></span>
                            <p>{{$course->instructor_en}}</p>
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
                        <p>{{$course->topics_en}}
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
                    <p><i>-</i> {{ $course->objectives1_en }} </p>
                    <p><i>-</i> {{ $course->objectives2_en }} </p>
                    <p><i>-</i> {{ $course->objectives3_en }} </p>
                    <p><i>-</i> {{ $course->objectives4_en }} </p>
                    <p><i>-</i> {{ $course->objectives5_en }} </p>
                    <p><i>-</i> {{ $course->objectives6_en }} </p>


                </div>
            </div>
        </div>
    </div>
    <!-- About us section end -->

@stop
