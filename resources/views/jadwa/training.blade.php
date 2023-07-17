@extends('jadwa.master')
@section('title', 'Training')
@section('content')
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
            <div class="text"><a href="{{ route('jadwa.index', $page='index') }}">Home</a><i class="fa fa-angle-right"></i> Training
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
           @foreach ($course as $i )
           <div class="col-md-3 col-sm-6 col-xs-12 training-colmun">
            <div class="single-item single-item-training wow fadeInUp animated animated">
                <div class="img-box " id="bar_tool">
                    <figure><img src="{{asset('uploads/'.$i->course_image)}} " alt=""></figure>
                </div>
                <div class="training-content">
                    <h4>{{ $i->course_en }}</h4>
                    <h5>{{ $i->price }}$</h5>
                    <ul class="meta">
                        <li>

                            @if ( $i->status =='Active')
                            <i class="fa-solid fa-circle active"></i>
                            @endif

                            @if ( $i->status =='Full up')
                            <i class="fa-solid fa-circle start"></i>
                            @endif

                            @if ( $i->status =='Expierd')
                            <i class="fa-solid fa-circle end"></i>
                            @endif

                            <b>{{ $i->status }}</b>
                            <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                            <b>{{ $i->start_at }}</b>
                        </li>

                    </ul>
                    <div class="course-person">
                        <div class="left-side">
                            <img src="{{asset('uploads/'.$i->instructor_image)}}" alt="" class="trainer-img">
                            <span>{{$i->instructor_name_en}}</span>
                        </div>
                        <div class="rigt-side">
                            <a class="btn " href="{{ route('jadwa.show_course',$i->id) }}">Read More</a >
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


    <!-- choose-accountent-section -->
    <section class="call-back course-selected sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                    <div class="call-back-content">
                        <div class="call-back-title">
                            <div class="section-title">
                                <h2>Choose Course</h2>
                            </div>
                            <div class="title-text">
                                <p>Choose your course to start your journey</p>
                            </div>
                        </div>

                        <div class="m-5">
                            @if (session('msg'))
                            <div class="alert alert-{{ session('type') }} m-5">
                            <strong>{{ session('msg') }}</strong>
                            </div>
                            @endif



                            @if ($errors->any())
                            <div class="alert alert-danger m-5">
                                @foreach ($errors->all() as $i)
                                <strong>{{ $i}}</strong>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        <div class="form-area">
                            <form action="javascript:void(0);" >
                               
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <input type="text" placeholder="Your Name" name="name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <input type="text" placeholder="Phone" name="phone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <div class="select-box">
                                            <i class="fa fa-angle-down"></i>
                                            <select class="custom-select-box" name="course">
                                                <option>Select your course</option>
                                                @foreach ( $course as $i )
                                                <option value="{{ $i->course_en }}">{{ $i->course_en }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <button class="white-btn white-btn-style">Send Request</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- choose-accountent-section end -->

    <!-- objective section-->
    <section class="obj-section">
        <div class="container ">
            <div class="row">
                <div class="col-lg-5">
                    <img src="{{asset('assets/images/about/aboutw1.jpg')}}" alt="" class="obj-img">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                    <p class="obj-title">Objectives of the training process</p>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-objective">
                                <li>
                                    <p>knowledge and technology skills necessary to work in a diverse environment.</p>
                                </li>
                                <li>
                                    <p>Building business skills in a digital transformation environment.</p>
                                </li>
                                <li>
                                    <p>Knowledge of the ethics and policies of accounting and financial work privacy.
                                    </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-objective">
                                <li>
                                    <p>Analyzing the activities of business organizations.</p>
                                </li>
                                <li>
                                    <p>Enhancing the trainee's institutional work skills.</p>
                                </li>
                                <li>
                                    <p>Dealing with the outputs of the accounting system.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End objective section-->


@endsection
