@extends('jadwa.master')
@section('title', ' Home')
@section('content')
    <!-- main slider -->

    <div class="slider-container">
        <div class="slider-control left inactive"></div>
        <div class="slider-control right"></div>
        <ul class="slider-pagi"></ul>
        <div class="slider">
            <div class="slide slide-0 active">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 170,0 170,405 0,405" />
                    </svg>
                    <div class="slide__text">
                        <h2 style="line-height: 40px; ">Organize your company's accounts.</h2>
                        <p class="slide__text-desc">You can find all of your business operations organized in one place.</p>
                    </div>
                </div>
            </div>
            <div class="slide slide-1 ">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 170,0 170,405 0,405" />
                    </svg>

                    <div class="slide__text">
                        <h2 style="line-height: 40px; ">Jadwa, puts you in control .</h2>
                        <p class="slide__text-desc">Don't worry about finding a job anymore! Pick your job and start working from home! .</p>
                    </div>
                </div>
            </div>
            <div class="slide slide-2">
                <div class="slide__bg"></div>
                <div class="slide__content">
                    <svg class="slide__overlay" viewBox="0 0 720 405" preserveAspectRatio="xMaxYMax slice">
                        <path class="slide__overlay-path" d="M0,0 170,0 170,405 0,405" />
                    </svg>
                    <div class="slide__text">
                        <h2 style="line-height: 40px; ">Building a more equitable working world.</h2>
                        <p class="slide__text-desc">Inclusion and training of accountants with disabilities and empowering them in the labour market .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- main slider end -->

    <!--Why choose Us-->
    <section class="why-us sec-pad">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title">
                    <h2>Why Jadwa</h2>
                </div>
                <div class="title-text"></div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="icon">
                        <i class="fa-solid fa-pen-to-square"></i>
                    </div>
                    <p>run your business uniquely and professionally.</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon">
                        <i class="fa-solid fa-calculator"></i>
                    </div>
                    <p>A qualitative shift in the accounting career.</p>
                </div>
                <div class="col-lg-4">
                    <div class="icon">
                        <i class="fa-solid fa-chart-line"></i>
                    </div>
                    <p>Integration of the economic action elements.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Choose Us-->
    <!-- About us section -->
    <section class=" sec-pad">
        <div class="container">
            <div class="feature-title centered">
                <div class="section-title">
                    <h2>About us</h2>
                </div>
                <div class="title-text"></div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="aboutSec">
                        <img class="aboutImg" src="{{ asset('assets/images/home/shutterstock_1844044174.jpg') }}"
                            alt="">
                        <div class="tran">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="aboutTitle">
                        <p>Jadwa </p>
                    </div>
                    <div class="aboutContent">
                        <p>A corporation working in the field of economic consultancy and business solutions, established in April 2012 in Gaza City - Palestine. Jadwa aims to improve the efficiency of economic units; by providing a hybrid workspace that combines the human being and cloud technologies, through programmed interventions according to accurate analysis related to the internal environment, in addition to the critical factors affecting the unstable environment.
                        </p>
                    </div>
                    <div class="btnAbout">
                        <button><a href="{{ route('jadwa.index', $page='about') }}" class="btn-one style-one radi">Know More</a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About us section end -->

    <!-- service section -->
    <section class="service-section">
        <div class="container-fullid">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-sm-12 service-colmun">
                    <div class="service-title">
                        <div class="sec-title">
                            <h2>Our Program</h2>
                        </div>
                        <div class="text">
                            <p>Jadwa has a set of operational and job-creation goals. We're achieving these objectives by
                                investing in
                                human resources and offering
                                a unique accounting work model that brings accountants, experts, and business owners
                                together on a
                                single platform.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 service-colmun">
                    <div class="three-column-carousel">
                        <div class="single-item">
                            <div class="icon-box"><a href="{{ route('jadwa.index', $page = 'digital transformation') }}"><i
                                        class="fa-solid fa-chalkboard-user"></i></a></div>
                            <h5><a href="{{ route('jadwa.index', $page = 'digital transformation') }}">Digital transformation,
                                    Business development</a></h5>
                            <div class="text">
                                <p>We seek, through this program, to achieve a sound institutional building that is
                                    compatible with..
                                </p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><a href="{{ route('jadwa.index', $page = 'the platform') }}"><i
                                        class="fa-solid fa-users"></i></a></div>
                            <h5><a href="{{ route('jadwa.index', $page = 'the platform') }}">The platform - Jadwa's Virtual
                                    Oasis</a></h5>
                            <div class="text">
                                <p>It is a virtual workspace developed by Jadwa to connect experts, accountants and
                                    business..</p>
                            </div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><a href="{{ route('jadwa.index', $page = 'studies') }}"><i
                                        class="fa-solid fa-arrow-trend-up"></i></a></div>
                            <h5><a href="{{ route('jadwa.index', $page = 'studies') }}">Studies, reports and market
                                    research</a></h5>
                            <div class="text">
                                <p>Evaluation and follow-up of programs and projects ,Feasibility study,Consumer customer researchand Policy analysis.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- testimonial section -->
    <section class="testimonial-section sec-pad">
        <div class="container">
            <div class="testimonial-title centered">
                <div class="section-title">
                    <h2>Testimonials</h2>
                </div>
                <div class="title-text"></div>
            </div>

            <div class="testimonial-slider">
                @if ($commit)
                    @foreach ($commit as $i)
                        <div class="testimonial-content">

                            <div class="authore-info">
                                <div class="img-box">
                                    <figure><img src="{{ asset('uploads/' . $i->image_name) }}" alt="person-1"
                                            class="test-person"></figure>
                                </div>
                                <div class="author-meta">
                                    <h4>{{ $i->name_en }}</h4>
                                    <p class="nick-name">{{$i->institution_en}}</p>
                                </div>
                            </div>
                            <div class="text">
                                <p>
                                    {!! $i->content_en !!}
                                </p>
                            </div>

                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- fact-counter -->
    <section class="fact-counter centered">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500"
                                    data-stop="20">0</span><span>+</span>
                            </div>
                            <div class="text">Years Experience</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500"
                                    data-stop="120">0</span><span>+</span>
                            </div>
                            <div class="text">Happy Customers</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500"
                                    data-stop="50">0</span><span>+</span>
                            </div>
                            <div class="text">Trainee</div>
                        </article>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
                    <div class="single-item">
                        <article class="column wow fadeIn" data-wow-duration="0ms">
                            <div class="count-outer"><span class="count-text" data-speed="1500"
                                    data-stop="60">0</span><span>+</span>
                            </div>
                            <div class="text">Our Expert Staffs</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- fact-counter section end -->

    <!-- team section -->
    <section class="our-team sec-pad">
        <div class="container">
            <div class="team-title centered">
                <div class="section-title">
                    <h2>Our Experts</h2>
                </div>
                <div class="title-text">
                    <p>More than 60 experts in many fields</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                    <div class="bxslider">
                        @foreach ($experts as $expert)
                            <div class="row">
                                <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
                                    <div class="clearfix">
                                        <figure class="img-box pull-left">
                                          <img src="{{ asset('uploads/' . $expert->image) }} "
                                                    alt="" />
                                        </figure>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">
                                    <div class="team-content">
                                        <div class="team-info">
                                            <div class="team-text">
                                              {{ $expert->name_en }}
                                            </div>
                                            <span>{{ $expert->jop_description_en }}</span>
                                        </div>
                                        <div class="text">
                                            <p>
                                                {{ $expert->content_en }}
                                            </p>
                                        </div>
                                        <div class="team-contact">
                                            <div class="text">
                                                <strong>Phone:</strong>&nbsp; &nbsp;{{ $expert->phone }}
                                            </div>
                                            <div class="text">
                                                <strong>Email:</strong>&nbsp; &nbsp;{{ $expert->email }}
                                            </div>
                                        </div>
                                        <ul class="team-social">
                                            <li>
                                                <a href="{{ $expert->twitter }}" target="blank 1"
                                                    class="active"><i class="fa-brands fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ $expert->linkedln }}" target="blank 2"><i
                                                        class="fa-brands fa-linkedin"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ $expert->facebook }}" target="blank 3"><i
                                                        class="fa-brands fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="{{ $expert->skay }}" target="blank 4"><i
                                                        class="fa-brands fa-skype"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="slider-pager">
                        <div class="center">
                            <ul class="nav-link list-inline">
                                <li id="slider-prev"></li>
                                <li id="slider-next"></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="slider-pager">
                                <ul class="list-inline thumb-box style2">
                                    @php
                                        $x = 0;
                                    @endphp
                                    @foreach ($experts as $expert)
                                        <li>
                                            <a class="active" data-slide-index="{{ $x }}" href="#">
                                                <figure>
                                                    <img src="{{ asset('uploads/' . $expert->image) }}" alt="" />
                                                </figure>
                                            </a>
                                        </li>
                                        @php
                                            $x++;
                                        @endphp
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team section end -->

    <!-- choose-accountent-section -->
    <section class="call-back sec-pad">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 colmun">
                    <div class="call-back-content">
                        <div class="call-back-title">
                            <div class="section-title">
                                <h2>Choose your Expert</h2>
                            </div>
                            <div class="title-text">
                                <p>Choose your accountant for your business by filling out the form</p>
                            </div>
                        </div>
                        <div class="form-area">
                            <form action="javascript:void(0);">
                           
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
                                            <select class="custom-select-box" name="expert">
                                                <option>Select your Accountent</option>
                                                @foreach ($experts as $i)
                                                    <option value="{{ $i->name_en }}">{{ $i->name_en }}</option>
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


    <!-- sponsors section -->
    <div id="ourclients">
        <center>
            <h2>Clients</h2>
            <div class="title-text">
                <p>More than 50 customers in many countries</p>
            </div>
        </center>
        <div class="clients-wrap">
            <var>
                <ul id="clientlogo" class="clearfix">
                    @foreach ($clients as $i)
                        <li>
                            <img src="{{ asset('uploads/' . $i->image_name) }}" alt="" />
                        </li>
                    @endforeach

                </ul>
            </var>

        </div>
    </div>


@stop
