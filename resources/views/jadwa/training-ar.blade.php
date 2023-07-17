@extends('jadwa.master_ar')
@section('title','التدريب')
@section('content')

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
            <div class="text"><a href="{{ route('jadwa.index', $page='index_ar') }}">الرئيسية</a><i class="fa fa-angle-left"></i> التدريب
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
            <div class="row" style="
            display: flex;
            flex-direction: row-reverse;
        ">
                @foreach ($course as $i )
                <div class="col-md-3 col-sm-6 col-xs-12 training-colmun">
                    <div class="single-item single-item-training wow fadeInUp animated animated">
                        <div class="img-box"><a href="blog-details.html">
                            <figure><img src="{{asset('uploads/'.$i->course_image)}} " alt=""></figure>
                        </a></div>
                        <div class="training-content">
                            <h4> {{ $i->course_ar }} </h4>
                            <h5>{{ $i->price }}$</h5>
                            <ul class="meta">
                                <li>
                                    <b>{{ $i->status }}</b>
                                    @if ( $i->status =='Active')
                                    <i class="fa-solid fa-circle active"></i>
                                    @endif

                                    @if ( $i->status =='Full up')
                                    <i class="fa-solid fa-circle start"></i>
                                    @endif

                                    @if ( $i->status =='Expierd')
                                    <i class="fa-solid fa-circle end"></i>
                                    @endif


                                    <b>{{ $i->start_at }}</b>
                                    <i class="fa-regular fa-calendar" aria-hidden="true"></i>

                                </li>

                            </ul>
                            <div class="course-person">
                                <div class="left-side">
                                    <span>  {{$i->instructor_name_ar}}</span>
                                    <img src="{{asset('uploads/'.$i->instructor_image)}}" alt="" class="trainer-img">

                                </div>
                                <div class="rigt-side">
                                    <!-- <button>انضم الآن</button> -->
                                    <a  href="{{ route('jadwa.show_course_ar',$i->id) }}">  المزيد</a>
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
    <section class="call-back sec-pad rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                    <div class="call-back-content">
                        <div class="call-back-title">
                            <div class="section-title">
                                <h2>اختار دورتك</h2>
                            </div>
                            <div class="title-text">
                                <p>اختار دورتك لبدء الرحلة</p>
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
                            <form action="javascript:void(0);">
                                <div class="row">
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <input type="text" placeholder="الاسم"  name="name">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun" >
                                        <input type="email" placeholder="الايميل" name="email">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <input type="text" placeholder="الهاتف"  name="phone">
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                                        <div class="select-box">
                                            <i class="fa fa-angle-down"></i>
                                            <select class="custom-select-box" name="course">
                                                <option>اختار دورتك</option>
                                                @foreach ( $course as $i )
                                                <option value="{{ $i->course_en }}">{{ $i->course_ar }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <button class="white-btn white-btn-style">أرسل الطلب</button>
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

                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun" dir="rtl">
                    <p class="obj-title">أهداف العملية التدريبية</p>
                    <!-- <p class="general-objective">General objective: To prepare an accountant who possesses the knowledge and technology skills necessary to work in a diverse environment.</p> -->
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-objective-ar">
                                <li>
                                    <p>المهارات والتقنية اللازمة للعمل في بيئة متنوعة.</p>
                                </li>
                                <li>
                                    <p>بناء مهارات العمل في بيئة التحول الرقمي.</p>
                                </li>
                                <li>
                                    <p>الإلمام بأخلاقيات وسياسات المحاسبة.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-objective-ar">
                                <li>
                                    <p>تحليل أنشطة منظمات الأعمال.</p>
                                </li>
                                <li>
                                    <p>تعزيز مهارات العمل المؤسسي للمتدرب.</p>
                                </li>
                                <li>
                                    <p>التعامل مع مخرجات النظام المحاسبي.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="{{ asset('assets/images/about/aboutw1.jpg') }}" alt="" class="obj-img">
                </div>
            </div>
        </div>
    </section>
    <!-- End objective section-->
@stop
