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
    <title>{{ config('app.name') }}-{{ $title }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/logo/jadwa.png') }}" type="image/x-icon" />
    @include('admin.layouts.assets.styles')

</head>

<body class="main-body app sidebar-mini rtl" id="#myonoffswitch54">

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
                                                            class="header-icon-svgs" viewBox="0 0 24 24" width="24px"
                                                            fill="#000000">
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

            <x-admin.menu/>
        </div>

        {{ $slot }}
        <!-- Footer opened -->
        <div class="main-footer ht-45">
            <div class="container-fluid pd-t-0 ht-100p">
                <span> Copyright © {{ date('Y') }}<a href="javascript:void(0);"
                        class="text-primary">{{ env('APP_NAME') }}</a>. Designed with
                    <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> {{ config('app.name') }} </a> All
                    rights reserved.</span>
            </div>
        </div>
        <!-- Footer closed -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="las la-angle-double-up"></i></a>
    @include('admin.layouts.assets.scripts')
</body>

</html>
