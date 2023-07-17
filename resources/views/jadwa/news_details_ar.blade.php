@extends('jadwa.master_ar')
@section('title','الاخبار')
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
            <div class="text"><a href="{{ route('jadwa.index',$page='index_ar') }}">الرئيسية</a><i class="fa fa-angle-left"></i> آخبار جدوى
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container" dir="rtl">
        <div class="container news-detailesar">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>{{ $news->title_ar }} </h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <i class="bi bi-clock"></i>
                        <b>{{ $news->updated_at->format('Y|m|d') }}</b>
                    </div>
                    <div class="row">
                        <p>{!! $news->content_ar !!} </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our news end -->
@stop
