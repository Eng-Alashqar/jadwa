@extends('jadwa.master')
@section('title','Blogin')
@section('content')
    <!-- page title -->
    <div class="blog-details-bg centered">
        <div class="container">
            <div class="text">Jadwa sign an agreement to absorb training and coexistence.</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page='index') }}">Home</a><i class="fa fa-angle-right"></i>{{ $blog->title_en }}
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-blog -->
    <section class="blog-details news-section blog-page sidebar-page-container">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                    <div class="blog-single-section sidebar-details">
                        <div class="news-style-one">
                            <div class="single-item wow fadeInUp animated animated">
                                <div class="img-box">
                                    <figure><img src="{{ asset('uploads/'.$blog->image_name )}}" alt="" style=" min-height:500px; max-height:650px;" ></figure>
                                </div>
                                <div class="news-content">
                                    <!-- <div class="date">25 <div class="text">Feb</div></div> -->
                                    <ul class="meta">
                                        <li><i class="fa fa-user" aria-hidden="true"></i>{{ $blog->auther }}</li>
                                        <li><i class="fa-solid fa-calendar" aria-hidden="true"></i>{{ $blog->updated_at }}</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i>0</li>
                                    </ul>
                                    <div class="title">{{ $blog->title_en }}</div>
                                    <div class="text">
                                        <p>{!! $blog->content_en !!}</p>
                                    </div>
                                    <div class="post-share-option">
                                        <div class="text">Share <i class="fa fa-share-alt"></i></div>
                                        <ul class="post-social">

                                            <a href="https://www.facebook.com/JadwaConsulting" class="active"><i class="fa-brands fa-facebook"></i></a>
                                              </li>
                                              <li>
                                                <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a></li>
                                               <li>
                                              <li>
                                                <a href="https://www.linkedin.com/company/77684098/admin/"><i class="fa-brands fa-linkedin"></i></a>
                                              </li>
                                              <li>
                                                <a href="https://www.instagram.com/jadwa.ps/"><i class="fa-brands fa-instagram"></i></a>
                                              </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-8 col-xs-12 sidebar-side">
                    <div class="sidebar">

                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title">
                                <h4>Related Blog</h4>
                            </div>
                            @if ($blogs)
                            @foreach ( $blogs as $i )

                            <div class="single-post">

                                <div class="img-box" >
                                   <a href="{{ route('jadwa.show_blog',$i->id )}}">

                                        <figure style=""><img src="{{ asset('uploads/'.$i->image_name) }}" alt="" style=" height:50px; width:100px ; "></figure>

                                    </a>
                                </div>
                                <div class="post-title">
                                    <h6><a href="{{ route('jadwa.show_blog',$i->id )}}">{{ $i->title_en }}</a></h6>
                                </div>
                                <ul class="post-time">
                                    <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                    <li>{{ $i->updated_at }}</li>
                                </ul>



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
