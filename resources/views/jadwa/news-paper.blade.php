@extends('jadwa.master_ar')
@section('title', 'الاخبار')
@section('content')
    <!-- page title -->
    <div class="training-bg-ar centered">
        <div class="container">
            <div class="text">آخبار جدوى</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page = 'index_ar') }}">الرئيسية</a><i
                    class="fa fa-angle-left"></i> آخبار جدوى
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row" style=" display: flex; flex-direction: row-reverse;">
                @foreach ($main as $i)
                    <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                        <div class="blog-single-section sidebar-details">
                            <div class="news-style-one">
                                <div class="single-item wow fadeInUp animated animated" style="text-align: end;">
                                    <div class="img-box">
                                        <figure>
                                            <img src="{{ asset('uploads/' . $i->image_name) }}"
                                                style="height: 350px ; width:100% ;" alt="">
                                        </figure>
                                    </div>
                                    <div style="margin-left: 1%; display: flex;flex-direction: row-reverse;"">
                                        <i class="bi bi-clock"></i>
                                        <b>{{ $i->updated_at->format('Y|m|d') }}</b>
                                    </div>
                                    <p
                                        style="
                                    display: flex;
                                    flex-direction: row-reverse;
                                ">
                                        {{ $i->title_ar }}<a type="button" href="{{ route('jadwa.show_news_ar', $i->id) }}"
                                        class="btn btn-link text-decoration-none border-0">اقرأ المزيد ..</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side"
                    style="
                text-align: end;
            ">
                    <div class="sidebar">
                        @foreach ($main2 as $i)
                            <div class="row my-5" style=" display: flex; flex-direction: row-reverse; text-align: end;">

                                <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                                    <div class="blog-single-section sidebar-details">
                                        <div class="news-style-one">
                                            <div class="single-item wow fadeInUp animated animated">
                                                <div class="img-box">
                                                    <figure>
                                                        <img src="{{ asset('uploads/' . $i->image_name) }}"
                                                            style="height: 190px ; width:100% ;" alt="">
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side">
                                    <div class="row">
                                        <i class="bi bi-clock"></i>
                                        <b>{{ $i->updated_at->format('Y|m|d') }}</b>
                                    </div>
                                    <div class="row" style="text-align: end;">
                                        <p  style="
                                        display: flex;
                                        flex-direction: row-reverse;
                                    ">{{ $i->title_ar }}<a type="button" href="{{ route('jadwa.show_news_ar', $i->id) }}"
                                        class="btn btn-link text-decoration-none border-0">اقرأ المزيد ..</a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                    </div>
    </section>
    <!-- our news end -->

    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container" dir="rtl">
        <div class="container">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>آخر الأخبار</h3>
                    <hr>
                </div>
            </div>
            <div class="row">
                @foreach ($news as $i)
                    <div class="col-md-6">
                        <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side">
                            <div class="row">
                                <i class="bi bi-clock"></i>
                                <b>{{ $i->updated_at->format('Y|m|d') }}</b>
                            </div>
                            <div class="row">
                                <p>{{ $i->title_ar }}<a type="button" href="{{ route('jadwa.show_news_ar', $i->id) }}"
                                        class="btn btn-link text-decoration-none border-0">اقرأ المزيد ..</a>
                                </p>
                            </div>
                        </div>
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
                    </div>
                @endforeach
            </div>
    </section>
    <!-- our news end -->
@stop
