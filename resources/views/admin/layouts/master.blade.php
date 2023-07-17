<!doctype html>
<html lang="en" dir="ltr">

<head>

    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords"
        content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4" />

    <!-- Title -->
    <title>{{ env('APP_NAME') }}{{ ' | Dashbord' }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo/jadwa.png') }}" type="image/x-icon" />

    <!-- Icons css -->
    <link href="{{ asset('assets2/css/icons.css') }}" rel="stylesheet">

    <!-- Bootstrap css -->
    <link href="{{ asset('assets2/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- style css -->
    <link href="{{ asset('assets2/css/style.css') }}" rel="stylesheet">

    <!--- Animations css-->
    <link href="{{ asset('assets2/css/animate.css') }}" rel="stylesheet">

    <!---Switcher css-->
    <link href="{{ asset('assets2/switcher/css/switcher.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/switcher/demo.css') }}" rel="stylesheet">

    {{-- Toastr --}}
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    @yield('styles')
</head>

<body class="ltr main-body app sidebar-mini">

    <!-- Loader -->
    <div id="global-loader">
        <img src="{{ asset('assets2/img/loader.svg') }}" class="loader-img" alt="Loader">
    </div>
    <!-- /Loader -->

    <!-- Page -->
    <div class="page">
        <div>
            <!-- main-header -->
            <div class="main-header side-header sticky nav nav-item">
                <div class="container-fluid main-container ">
                    <div class="main-header-left ">
                        <div class="responsive-logo">
                            <a href="{{ url('/') }}" class="header-logo">
                                <img src="{{ asset('assets/images/logo/2020.svg') }}" class="logo-1" alt="logo">
                                <img src="{{ asset('assets/images/footer/logo white-02.svg') }}" class="dark-logo-1"
                                    alt="logo">
                            </a>
                        </div>
                        <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                            <a class="open-toggle" href="javascript:void(0);"><i
                                    class="header-icon fe fe-align-left"></i></a>
                            <a class="close-toggle" href="javascript:void(0);"><i class="header-icons fe fe-x"></i></a>
                        </div>
                        <div class="main-header-center ms-3 d-sm-none d-md-none d-lg-block">
                            <input class="form-control" placeholder="Search for anything..." type="search"> <button
                                class="btn"><i class="fas fa-search d-none d-md-block"></i></button>
                        </div>
                    </div>
                    <div class="main-header-right">
                        <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button"
                            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                            aria-controls="navbarSupportedContent-4" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon fe fe-more-vertical "></span>
                        </button>


                        <div class="mb-0 navbar navbar-expand-lg navbar-nav-right responsive-navbar navbar-dark p-0">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">

                                <ul class="nav nav-item  navbar-nav-right ms-auto">
                                    <li class="">

                                    </li>
                                    <li class="dropdown nav-item main-layout">
                                        <a class="new nav-link theme-layout nav-link-bg layout-setting">
                                            <span class="dark-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="header-icon-svgs" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M20.742 13.045a8.088 8.088 0 0 1-2.077.271c-2.135 0-4.14-.83-5.646-2.336a8.025 8.025 0 0 1-2.064-7.723A1 1 0 0 0 9.73 2.034a10.014 10.014 0 0 0-4.489 2.582c-3.898 3.898-3.898 10.243 0 14.143a9.937 9.937 0 0 0 7.072 2.93 9.93 9.93 0 0 0 7.07-2.929 10.007 10.007 0 0 0 2.583-4.491 1.001 1.001 0 0 0-1.224-1.224zm-2.772 4.301a7.947 7.947 0 0 1-5.656 2.343 7.953 7.953 0 0 1-5.658-2.344c-3.118-3.119-3.118-8.195 0-11.314a7.923 7.923 0 0 1 2.06-1.483 10.027 10.027 0 0 0 2.89 7.848 9.972 9.972 0 0 0 7.848 2.891 8.036 8.036 0 0 1-1.484 2.059z" />
                                                </svg></span>
                                            <span class="light-layout"><svg xmlns="http://www.w3.org/2000/svg"
                                                    class="header-icon-svgs" width="24" height="24"
                                                    viewBox="0 0 24 24">
                                                    <path
                                                        d="M6.993 12c0 2.761 2.246 5.007 5.007 5.007s5.007-2.246 5.007-5.007S14.761 6.993 12 6.993 6.993 9.239 6.993 12zM12 8.993c1.658 0 3.007 1.349 3.007 3.007S13.658 15.007 12 15.007 8.993 13.658 8.993 12 10.342 8.993 12 8.993zM10.998 19h2v3h-2zm0-17h2v3h-2zm-9 9h3v2h-3zm17 0h3v2h-3zM4.219 18.363l2.12-2.122 1.415 1.414-2.12 2.122zM16.24 6.344l2.122-2.122 1.414 1.414-2.122 2.122zM6.342 7.759 4.22 5.637l1.415-1.414 2.12 2.122zm13.434 10.605-1.414 1.414-2.122-2.122 1.414-1.414z" />
                                                </svg></span>
                                        </a>
                                    </li>
                                    <li class="nav-link search-icon d-lg-none d-block">
                                        <form class="navbar-form" role="search">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search">
                                                <span class="input-group-btn">
                                                    <button type="reset" class="btn btn-default">
                                                        <i class="fas fa-times"></i>
                                                    </button>
                                                    <button type="submit" class="btn btn-default nav-link resp-btn">
                                                        <svg xmlns="http://www.w3.org/2000/svg" height="24px"
                                                            class="header-icon-svgs" viewBox="0 0 24 24"
                                                            width="24px" fill="#000000">
                                                            <path d="M0 0h24v24H0V0z" fill="none" />
                                                            <path
                                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z" />
                                                        </svg>
                                                    </button>
                                                </span>
                                            </div>
                                        </form>
                                    </li>

                                    <li class="nav-item full-screen fullscreen-button">
                                        <a class="new nav-link full-screen-link" href="javascript:void(0);"><svg
                                                xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-maximize">
                                                <path
                                                    d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3">
                                                </path>
                                            </svg></a>
                                    </li>
                                    <li class="dropdown main-profile-menu nav nav-item nav-link">
                                        <a class="profile-user d-flex" href=""><img alt=""
                                                src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"></a>
                                        <div class="dropdown-menu">
                                            <div class="main-header-profile bg-primary p-3">
                                                <div class="d-flex wd-100p">
                                                    <div class="main-img-user"><img alt=""
                                                            src="https://ui-avatars.com/api/?name={{ Auth::user()->name }}"
                                                            class=""></div>
                                                    <div class="ms-3 my-auto">
                                                        <h6>{{ Auth::user()->name }}</h6>
                                                        <span>{{ Auth::user()->email }}</span>
                                                    </div>
                                                </div>
                                            </div>


                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                              document.getElementById('logout-form').submit();">
                                                <i class="bx bx-log-out"></i>
                                                Sign Out

                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                    <li class="dropdown main-header-message right-toggle">
                                        <a class="nav-link pe-0" data-bs-toggle="sidebar-right"
                                            data-bs-target=".sidebar-right">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-menu">
                                                <line x1="3" y1="12" x2="21" y2="12">
                                                </line>
                                                <line x1="3" y1="6" x2="21" y2="6">
                                                </line>
                                                <line x1="3" y1="18" x2="21" y2="18">
                                                </line>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /main-header -->

            <!-- main-sidebar -->
            <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
            <div class="sticky">
                <aside class="app-sidebar sidebar-scroll">
                    <div class="main-sidebar-header active">
                        <a class="desktop-logo logo-light active" href="{{ url('/') }}"><img
                                src="{{ asset('assets/images/logo/2020.svg') }}" class="main-logo"
                                alt="logo"></a>
                        <a class="desktop-logo logo-dark active" href="{{ url('/') }}"><img
                                src="{{ asset('assets/images/footer/logo white-02.svg') }}" class="main-logo"
                                alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-light active" href="{{ url('/') }}"><img
                                src="{{ asset('assets/images/logo/jadwa.png') }}" alt="logo"></a>
                        <a class="logo-icon mobile-logo icon-dark active" href="{{ url('/') }}"><img
                                src="{{ asset('assets/images/footer/logo white-02.svg') }}" alt="logo"></a>
                    </div>
                    <div class="main-sidemenu">
                        <div class="app-sidebar__user clearfix">
                            <div class="dropdown user-pro-body">
                                <div class="">
                                    <img alt="user-img" class="avatar avatar-xl brround"
                                        src="https://ui-avatars.com/api/?name={{ Auth::user()->name }} "><span
                                        class="avatar-status profile-status bg-green"></span>
                                </div>
                                <div class="user-info">
                                    <h4 class="fw-semibold mt-3 mb-0">{{ Auth::user()->name }}</h4>
                                    <span class="mb-0 text-muted">{{ Auth::user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="side-menu">
                            <li class="side-item side-item-category">Main</li>
                            <li class="slide">
                                <a class="side-menu__item" href="{{ route('admin.index', $page = 'index') }}"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3" />
                                        <path
                                            d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z" />
                                    </svg><span class="side-menu__label">Index</span></a>
                            </li>
                            <li class="side-item side-item-category">content mangment</li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none" />
                                        <path
                                            d="M5 9h14V5H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5S7.83 8.5 7 8.5 5.5 7.83 5.5 7 6.17 5.5 7 5.5zM5 19h14v-4H5v4zm2-3.5c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5z"
                                            opacity=".3" />
                                        <path
                                            d="M20 13H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zm-1 6H5v-4h14v4zm-12-.5c.83 0 1.5-.67 1.5-1.5s-.67-1.5-1.5-1.5-1.5.67-1.5 1.5.67 1.5 1.5 1.5zM20 3H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 6H5V5h14v4zM7 8.5c.83 0 1.5-.67 1.5-1.5S7.83 5.5 7 5.5 5.5 6.17 5.5 7 6.17 8.5 7 8.5z" />
                                    </svg><span class="side-menu__label">About Page Setup</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    @can('expert-list')
                                    <li><a class="slide-item" href="{{ route('admin.about.index') }}">Our Experts</a>
                                    </li>
                                    @endcan

                                    @can('expert-create')
                                    <li><a class="slide-item" href="{{ route('admin.about.create') }}">Add New
                                        Expert</a></li>
                                    @endcan

                                    @can('client-list')
                                    <li><a class="slide-item" href="{{ route('admin.client.index') }}">Clients</a>
                                    </li>
                                    @endcan
                                    @can('client-create')
                                    <li><a class="slide-item" href="{{ route('admin.client.create') }}">Add New
                                        Client</a></li>
                                    @endcan

                                </ul>
                            </li>





                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z"
                                            opacity=".3"></path>
                                        <path
                                            d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z">
                                        </path>
                                    </svg><span class="side-menu__label">Training</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    @can('course-list')
                                    <li><a class="slide-item" href="{{ route('admin.courses.index') }}">Courses</a>
                                    </li>
                                    @endcan
                                    @can('course-create')
                                    <li><a class="slide-item" href="{{ route('admin.courses.create') }}">Add
                                        Course</a></li>
                                    @endcan

                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M13 4H6v16h12V9h-5V4zm3 14H8v-2h8v2zm0-6v2H8v-2h8z" opacity=".3">
                                        </path>
                                        <path
                                            d="M8 16h8v2H8zm0-4h8v2H8zm6-10H6c-1.1 0-2 .9-2 2v16c0 1.1.89 2 1.99 2H18c1.1 0 2-.9 2-2V8l-6-6zm4 18H6V4h7v5h5v11z">
                                        </path>
                                    </svg><span class="side-menu__label">News Bage</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);">News Bage</a>
                                    </li>
                                    @can('news-list')
                                    <li><a class="slide-item" href="{{ route('admin.news.index') }}">All News</a>
                                    </li>
                                    @endcan
                                    @can('news-create')
                                    <li><a class="slide-item" href="{{ route('admin.news.create') }}">Add News</a>
                                    </li>
                                    @endcan


                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3">
                                        </path>
                                        <path
                                            d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z">
                                        </path>
                                    </svg><span class="side-menu__label">Blogs Bage</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);">Blog Bage</a>
                                    </li>
                                    @can('blog-list')
                                    <li><a class="slide-item" href="{{ route('admin.blogs.index') }}">All Blogs</a>
                                    </li>
                                    @endcan

                                    @can('blog-create')
                                    <li><a class="slide-item" href="{{ route('admin.blogs.create') }}">Add Blog</a>
                                    </li>
                                    @endcan


                                </ul>
                            </li>

                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path
                                            d="M12 4c-4.42 0-8 3.58-8 8s3.58 8 8 8 8-3.58 8-8-3.58-8-8-8zm3.5 4c.83 0 1.5.67 1.5 1.5s-.67 1.5-1.5 1.5-1.5-.67-1.5-1.5.67-1.5 1.5-1.5zm-7 0c.83 0 1.5.67 1.5 1.5S9.33 11 8.5 11 7 10.33 7 9.5 7.67 8 8.5 8zm3.5 9.5c-2.33 0-4.32-1.45-5.12-3.5h1.67c.7 1.19 1.97 2 3.45 2s2.76-.81 3.45-2h1.67c-.8 2.05-2.79 3.5-5.12 3.5z"
                                            opacity=".3"></path>
                                        <circle cx="15.5" cy="9.5" r="1.5"></circle>
                                        <circle cx="8.5" cy="9.5" r="1.5"></circle>
                                        <path
                                            d="M12 16c-1.48 0-2.75-.81-3.45-2H6.88c.8 2.05 2.79 3.5 5.12 3.5s4.32-1.45 5.12-3.5h-1.67c-.69 1.19-1.97 2-3.45 2zm-.01-14C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z">
                                        </path>
                                    </svg><span class="side-menu__label">Testimonials</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);">Testimonials</a>
                                    </li>
                                    @can('polls-list')
                                    <li><a class="slide-item" href="{{ route('admin.polls.index') }}">All
                                        Testimonials</a>
                                    </li>
                                    @endcan

                                 @can('polls-create')
                                 <li><a class="slide-item" href="{{ route('admin.polls.create') }}">Add
                                    Testimonial</a>
                                  </li>

                                 @endcan
                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3">
                                        </path>
                                        <path
                                            d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z">
                                        </path>
                                    </svg><span class="side-menu__label">Roles Bage</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);">Roles Bage</a>
                                    </li>
                                    @can('role-list')
                                    <li><a class="slide-item" href="{{ route('admin.roles.index') }}">All Roles</a>
                                    </li>
                                    @endcan

                                    @can('role-create')
                                    <li><a class="slide-item" href="{{ route('admin.roles.create') }}">Add Roles</a>
                                    </li>
                                    @endcan

                                </ul>
                            </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="side-menu__icon"
                                        viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                        <path d="M5 5h15v3H5zm12 5h3v9h-3zm-7 0h5v9h-5zm-5 0h3v9H5z" opacity=".3">
                                        </path>
                                        <path
                                            d="M20 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h15c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM8 19H5v-9h3v9zm7 0h-5v-9h5v9zm5 0h-3v-9h3v9zm0-11H5V5h15v3z">
                                        </path>
                                    </svg><span class="side-menu__label">User Bage</span><i
                                        class="angle fe fe-chevron-down"></i></a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);">User Bage</a>
                                    </li>
                                   @can('user-list')
                                   <li><a class="slide-item" href="{{ route('admin.users.index') }}">All Users</a>
                                   </li>
                                   @endcan
                                @can('user-create')
                                <li><a class="slide-item" href="{{ route('admin.users.create') }}">Add User</a>
                                </li>

                                @endcan
                                </ul>
                            </li>
                 

                            <li class="side-item side-item-category"> </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z"
                                        opacity=".3" />
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                                    </svg><span class="side-menu__label"></span>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);"></a></li>
                                    <li><a class="slide-item" href="cards.html"></a></li>


                                </ul>
                            </li>

                            <li class="side-item side-item-category"> </li>
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0);">
                                    <path d="M0 0h24v24H0V0z" fill="none" />
                                    <path d="M4 12c0 4.08 3.06 7.44 7 7.93V4.07C7.05 4.56 4 7.92 4 12z"
                                        opacity=".3" />
                                    <path
                                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 17.93c-3.94-.49-7-3.85-7-7.93s3.05-7.44 7-7.93v15.86zm2-15.86c1.03.13 2 .45 2.87.93H13v-.93zM13 7h5.24c.25.31.48.65.68 1H13V7zm0 3h6.74c.08.33.15.66.19 1H13v-1zm0 9.93V19h2.87c-.87.48-1.84.8-2.87.93zM18.24 17H13v-1h5.92c-.2.35-.43.69-.68 1zm1.5-3H13v-1h6.93c-.04.34-.11.67-.19 1z" />
                                    </svg><span class="side-menu__label"></span>
                                </a>
                                <ul class="slide-menu">
                                    <li class="side-menu__label1"><a href="javascript:void(0);"></a></li>
                                    <li><a class="slide-item" href="cards.html"></a></li>


                                </ul>
                            </li>

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </aside>
            </div>
            <!-- main-sidebar -->
        </div>

        @yield('content')

        <!-- Footer opened -->
        <div class="main-footer ht-45">
            <div class="container-fluid pd-t-0 ht-100p">
                <span> Copyright © {{ date('Y') }}<a href="javascript:void(0);"
                        class="text-primary">{{ env('APP_NAME') }}</a>. Designed with
                    <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Jadwa </a> All
                    rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>

    <!-- JQuery min js -->
    <script src="{{ asset('assets2/plugins/jquery/jquery.min.js') }}"></script>

    <!-- Bootstrap Bundle js -->
    <script src="{{ asset('assets2/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Moment js -->
    <script src="{{ asset('assets2/plugins/moment/moment.js') }}"></script>

    <!-- P-scroll js -->
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/perfect-scrollbar/p-scroll.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('assets2/js/sticky.js') }}"></script>

    <!-- eva-icons js -->
    <script src="{{ asset('assets2/js/eva-icons.min.js') }}"></script>

    <!-- Rating js-->
    <script src="{{ asset('assets2/plugins/ratings-2/jquery.star-rating.js') }}"></script>
    <script src="{{ asset('assets2/plugins/ratings-2/star-rating.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('assets2/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- Right-sidebar js -->
    <script src="{{ asset('assets2/plugins/sidebar/sidebar.js') }}"></script>
    <script src="{{ asset('assets2/plugins/sidebar/sidebar-custom.js') }}"></script>

    <!-- Switcher js -->
    <script src="{{ asset('assets2/switcher/js/switcher.js') }}"></script>

    <!--themecolor js-->
    <script src="{{ asset('assets2/js/themecolor.js') }}"></script>

    <!-- custom js -->
    <script src="{{ asset('assets2/js/custom-1.js') }}"></script>
    <script>
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 2000);
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('scripts')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/jszip.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets2/plugins/datatable/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets2/js/table-data.js') }}"></script>

</body>

</html>
