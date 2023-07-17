@extends('jadwa.master')
@section('title', 'News')
@section('content')


    <!-- page title -->
    <div class="blog-details-bg centered">
        <div class="container">
            <div class="text">Jadwa News</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Jadwa News
            </div>
        </div>
    </div>
    <!-- bread crumb end -->


    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                @foreach ( $main as $i)
                <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                    <div class="blog-single-section sidebar-details">
                        <div class="news-style-one">
                            <div class="single-item wow fadeInUp animated animated">
                                <div class="img-box">
                                    <figure>
                                        <img src="{{ asset('uploads/'.$i->image_name) }}" style="height: 350px ; width:100% ;" alt="">
                                    </figure>
                                </div>
                                <div style="margin-left: 1%">
                                    <i class="bi bi-clock"></i>
                                    <b>{{ $i->updated_at->format('Y|m|d') }}</b>
                                </div>
                                <p>{{$i->title_en}}<a type="button" href="{{ route('jadwa.show_news',$i->id) }}"
                                    class="btn btn-link text-decoration-none border-0">Read more..</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="col-md-6 col-sm-8 col-xs-12 sidebar-side">
                    <div class="sidebar">
                        @foreach ( $main2 as $i)
                      <div class="row my-5">

                    <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                        <div class="blog-single-section sidebar-details">
                            <div class="news-style-one">
                                <div class="single-item wow fadeInUp animated animated">
                                    <div class="img-box">
                                        <figure>
                                            <img src="{{ asset('uploads/'.$i->image_name) }}" style="height: 190px ; width:100% ;" alt="">
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
                        <div class="row">
                            <p>{{$i->title_en}}<a type="button" href="{{ route('jadwa.show_news',$i->id) }}"
                                class="btn btn-link text-decoration-none border-0">Read more..</a>
                            </p>
                        </div>
                    </div>

                     </div>
                     @endforeach

        </div>
    </section>
    <!-- our news end -->




    <!-- our-news -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="feature-title mb-2">
                <div class="section-title">
                    <h3>Last News</h3>
                    <hr>
                </div>
            </div>


      <div class="row">

        @foreach ($news as $i )

        <div class="col-md-6">
            <div class="col-md-6 col-sm-12 col-xs-12 content-side">
                <div class="blog-single-section sidebar-details">
                    <div class="news-style-one">
                        <div class="single-item wow fadeInUp animated animated">
                            <div class="img-box">
                                <figure>
                                    <img src="{{ asset('uploads/'.$i->image_name) }}" alt="" height="170">
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
                <div class="row">
                    <p>{{$i->title_en}}<a type="button" href="{{ route('jadwa.show_news',$i->id) }}"
                            class="btn btn-link text-decoration-none border-0">Read more..</a>
                    </p>
                </div>
            </div>
        </div>
        @endforeach


    </div>
        </div>
    </section>
    <!-- our news end -->

@stop
