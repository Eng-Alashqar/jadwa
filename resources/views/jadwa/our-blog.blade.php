@extends('jadwa.master')
@section('title','Blogin')
@section('content')
    <!-- page title -->
    <div class="blog-bg centered">
        <div class="container">
            <div class="text">Our Blog</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page='index') }}">Home</a><i class="fa fa-angle-right"></i> Blog
                <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-blog -->
    <section class="our-blog news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 content-side">
                    <div class="blog-content">
                        <div class="row">
                         @if ($blog)
                         @foreach ( $blog as $i)
                         <div class="col-md-4 col-sm-6 col-xs-12 news-colmun">
                            <div class="single-item wow fadeInUp animated animated">
                                <div class="img-box"><a href="{{ route('jadwa.show_blog', $i->id) }}">
                                        <figure><img src="{{ asset('uploads/'.$i->image_name) }}" alt="" style="height:200px ; width:100%;" ></figure>
                                        </a></div>
                                <div class="news-content">
                                    <ul class="meta">
                                        <li><i class="fa-solid fa-calendar" aria-hidden="true"></i>{{ $i->updated_at->format('Y|m|s') }}</li>
                                        <li><i class="fa fa-heart-o" aria-hidden="true"></i>350</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i>0</li>
                                    </ul>
                                    <h4><a href="{{ route('jadwa.show_blog', $i->id) }}">{{$i->title_en}} </a></h4>
                                </div>
                            </div>
                        </div>

                         @endforeach
                         @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- our blog end -->

@stop
