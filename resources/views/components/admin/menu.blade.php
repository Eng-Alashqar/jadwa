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
                <li class="side-item side-item-category">الرئيسية</li>
                <li class="slide">
                    <a class="side-menu__item" href="{{ route('admin.index', $page = 'index') }}">
                        <i class="fe fe-home  side-menu__icon"></i>
                        <span class="side-menu__label">الرئيسية</span></a>
                </li>
                <li class="side-item side-item-category">إدارة المحتوى</li>
                    @forelse ($items as $item)
                    <li class="slide {{ Route::is($item['active']) ? 'active':'' }}">
                        <a class="side-menu__item {{ Route::is($item['active']) ? 'active':'' }}" data-bs-toggle="slide" href="javascript:void(0);">
                            <i class="{{ $item['icon'] }}  side-menu__icon" ></i>
                                <span class="side-menu__label ">{{ $item['name'] }}</span><i
                                class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu {{ Route::is($item['active']) ? 'active':'' }}">
                            @can($item['role'])
                                <li><a class="slide-item {{ Route::is($item['active']) ? 'active':'' }}" href="{{ route($item['main_url']) }}">{{ $item['name'] }}</a>
                                </li>
                            @endcan

                            @can($item['role-add'])
                                <li><a class="slide-item" href="{{ route($item['add_url']) }}">إضافة {{ $item['name'] }}</a></li>
                            @endcan
                        </ul>
                    </li>
                    @empty

                    @endforelse



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
