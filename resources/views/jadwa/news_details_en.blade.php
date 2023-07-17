@extends('jadwa.master')
@section('title','About')
@section('content')

    <!-- page title -->
    <div class="blog-details-bg centered">
        <div class="container">
            <div class="text">Jadwa News Details</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Jadwa News Details
            </div>
        </div>
    </div>
    <!-- bread crumb end -->


    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>{{ $news->title_en }}</h3>
                </div>
            </div>
            <div class="row news-detailes">
                <div class="col-lg-12">
                    <div class="row">
                        <i class="bi bi-clock"></i>
                        <b>{{ $news->updated_at->format('Y|m|d') }}</b>
                    </div>
                    <div class="row">
                        <p>{!! $news->content_en !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- our news end -->
@stop
