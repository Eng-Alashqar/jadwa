<x-admin.master title="لوحة التحكم">
    <!-- main-content -->
    <div class="main-content app-content">

        <!-- container -->
        <div class="main-container container-fluid">

            <!-- breadcrumb -->
            <div class="breadcrumb-header justify-content-between">
                <div class="my-auto">
                    <div class="d-flex">
                        <h4 class="content-title mb-0 my-auto">الرئيسية</h4><span
                            class="text-muted mt-1 tx-13 ms-2 mb-0">/
                            لوحة التحكم</span>
                    </div>
                </div>

            </div>
            <!-- breadcrumb -->

            <!-- row -->
            <div class="row">
                <div class="row row-sm">
                    <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                        <div class="card bg-primary-gradient text-white ">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mt-2 text-center">
                                            <i class="fe fe-users tx-40"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mt-0 text-center">
                                            <span class="text-white">الأعظاء</span>
                                            <h2 class="text-white mb-0">{{ $users}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                        <div class="card bg-danger-gradient text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mt-2 text-center">
                                            <i class="fe fe-shopping-cart tx-40"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mt-0 text-center">
                                            <span class="text-white">الدورات</span>
                                            <h2 class="text-white mb-0">{{ $courses }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                        <div class="card bg-success-gradient text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mt-2 text-center">
                                            <i class="fe fe-bar-chart-2 tx-40"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mt-0 text-center">
                                            <span class="text-white">المدونة</span>
                                            <h2 class="text-white mb-0">{{ $blogs }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                        <div class="card bg-warning-gradient text-white">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="icon1 mt-2 text-center">
                                            <i class="fe fe-pie-chart tx-40"></i>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="mt-0 text-center">
                                            <span class="text-white">الأخبار</span>
                                            <h2 class="text-white mb-0">{{ $news }}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row closed -->

            <!-- row -->
            <div class="row row-sm">

                <div class="col-md-6">
                    <div class="card mg-b-20 mg-md-b-0">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                زيارات الموقع
                            </div>
                            <div class="ht-200 ht-sm-300" id="flotPie1"></div>
                        </div>
                    </div>
                </div><!-- col-6 -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="main-content-label mg-b-5">
                                تفاصيل الزيارات
                            </div>
                            <div class="product-timeline card-body pt-2 mt-1">
                                <ul class="timeline-1 mb-0">
                                    <li class="mt-0" id="mrg-8"> <i
                                            class="ti-home bg-primary-gradient text-white product-icon"></i> <span
                                            class="fw-semibold mb-4 tx-14 ">الصفحة الرئيسية</span> <a
                                            href="javascript:void(0);"
                                            class="float-end tx-11 text-muted">{{ $counter_visits['home'] }}زيارة</a>
                                        <p class="mb-0 text-muted tx-12">زيارات</p>
                                    </li>
                                    <li class="mt-0" id="mrg-8"> <i
                                            class="mdi mdi-file bg-danger-gradient text-white product-icon"></i> <span
                                            class="fw-semibold mb-4 tx-14 ">الأخبار</span> <a href="javascript:void(0);"
                                            class="float-end tx-11 text-muted">{{ $counter_visits['news'] }}زيارة</a>
                                        <p class="mb-0 text-muted tx-12">زيارات</p>

                                    </li>
                                    <li class="mt-0" id="mrg-8"> <i
                                            class="ti-bar-chart-alt bg-success-gradient text-white product-icon"></i>
                                        <span class="fw-semibold mb-4 tx-14 ">المدونة</span> <a
                                            href="javascript:void(0);"
                                            class="float-end tx-11 text-muted">{{ $counter_visits['blogs'] }}زيارة</a>
                                        <p class="mb-0 text-muted tx-12">زيارات</p>

                                    </li>
                                    <li class="mt-0" id="mrg-8"> <i
                                            class="ti-wallet bg-warning-gradient text-white product-icon"></i> <span
                                            class="fw-semibold mb-4 tx-14 ">الدورات</span> <a href="javascript:void(0);"
                                            class="float-end tx-11 text-muted">{{ $counter_visits['courses'] }}زيارة</a>
                                        <p class="mb-0 text-muted tx-12">زيارات</p>

                                    </li>
                                    <li class="mt-0" id="mrg-8"> <i
                                            class="si si-eye bg-purple-gradient text-white product-icon"></i> <span
                                            class="fw-semibold mb-4 tx-14 ">كل الزيارات</span> <a
                                            href="javascript:void(0);"
                                            class="float-end tx-11 text-muted">{{ $visitors }}زيارة</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- col-6 -->
            </div>
            <!-- row closed -->
        </div>
        <!-- Container closed -->
    </div>
    <!-- main-content closed -->

    @push('scripts')
        <!-- Internal Flot js -->
        <script src="{{ asset('assets2/plugins/jquery.flot/jquery.flot.js') }}"></script>
        <script src="{{ asset('assets2/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
        <script src="{{ asset('assets2/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
        <!-- Internal Chart flot js -->
        <script>
            let home = {{ $counter_visits['home'] }};
            let news = {{ $counter_visits['news'] }};
            let blog = {{ $counter_visits['blogs'] }};
            let courses = {{ $counter_visits['courses'] }};
        </script>
        <script src="{{ asset('assets2/js/jadwacharts.js') }}"></script>
    @endpush
</x-admin.master>
