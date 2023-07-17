@extends('jadwa.master_ar')
@section('title','المدونة')
@section('content')
    <!-- page title -->
    <div class="blog-details-bg-ar centered">
        <div class="container">
            <div class="text">{{ $blog->title_ar }}</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page='index_ar') }}">الرئيسية</a><i class="fa fa-angle-left"></i>
            {{ $blog->title_ar }}
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- our-blog -->
    <section class="blog-details news-section blog-page sidebar-page-container rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-8 col-xs-12 sidebar-side">
                    <div class="sidebar">
                        <!-- <div class="sidebar-search sidebar-widget">
                            <div class="search-box">
                                <input type="text" placeholder="Search...">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </div> -->
                        <div class="sidebar-post sidebar-widget">
                            <div class="sidebar-title title-ar">
                                <h4>مدونة ذات صلة</h4>
                            </div>
                            @if ($blogs)
                            @foreach ( $blogs as $i )
                        <div class="more-blog" style="
                        display: flex;
                        flex-direction: row-reverse;
                        justify-content: space-between;
                    ">
                                 <div class="single-post" dir="rtl">

                            <div class="post-title">
                                <h6><a href="{{ route('jadwa.show_blog_ar',$i->id )}}">{{ $i->title_ar }}</a></h6>
                            </div>
                            <ul class="post-time">
                                <li><i class="fa fa-calendar" aria-hidden="true"></i></li>
                                <li>{{ $i->updated_at }}</li>
                            </ul>
                        </div>
                        <div class="img-box"><a href="{{ route('jadwa.show_blog_ar',$i->id )}}">
                            <figure style=""><img src="{{ asset('uploads/'.$i->image_name) }}" alt="" style=" height:50px; width:100px ; "></figure>
                            </a>
                        </div></div>

                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-sm-12 col-xs-12 content-side">
                    <div class="blog-single-section sidebar-details">
                        <div class="news-style-one">
                            <div class="single-item wow fadeInUp animated animated">
                                <div class="img-box">
                                    <figure><img src="{{ asset('uploads/'.$blog->image_name )}}" alt=""  ></figure>
                                </div>
                                <div class="news-content">
                                    <!-- <div class="date">25 <div class="text">Feb</div></div> -->
                                    <ul class="meta">
                                        <li><i class="fa fa-user" aria-hidden="true"></i>{{ $blog->auther }} </li>
                                        <li><i class="fa-solid fa-calendar" aria-hidden="true"></i>{{ $blog->updated_at }}</li>
                                        <li><i class="fa fa-comments-o" aria-hidden="true"></i>0</li>
                                    </ul>
                                    <div class="title">{{ $blog->title_ar }}</div>
                                    <div class="text" style="
                                    display: flex;
                                ">
                                        <p >{!! $blog->content_ar !!}</p>
                                    </div>
                                    <div class="post-share-option">

                                        <ul class="post-social">
                                            <li>
                                                <a href="https://www.facebook.com/JadwaConsulting" class="active"><i class="fa-brands fa-facebook"></i></a>
                                              </li>
                                              <li>
                                                <a href="https://twitter.com/home" ><i class="fa-brands fa-twitter"></i></a></li>
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

            </div>
        </div>
    </section>
    <!-- our blog end -->
@stop
