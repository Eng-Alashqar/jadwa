<x-site.master-ar title="التحويل الرقمي وتطوير بيئة الأعمال">
    <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="التحويل الرقمي وتطوير بيئة الأعمال">
        <meta property="twitter:title" content="التحويل الرقمي وتطوير بيئة الأعمال">
        <meta itemprop="name" content="التحويل الرقمي وتطوير بيئة الأعمال">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.index','digital') }}">
        <meta property="og:url" content="{{ route('site.ar.index','digital') }}">
        <meta property="twitter:url" content="{{ route('site.ar.index','digital') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>

    <!-- page title -->
    <div class="program1-bg-ar centered">
        <div class="container">
            <div class="text">التحويل الرقمي وتطوير بيئة الأعمال</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">االرئيسية</a><i class="fa fa-angle-left"></i> التحويل الرقمي
                وتطوير بيئة
                الأعمال
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- service details -->
    <section class="service-details" dir="rtl">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 service-colmun">
                    <div class="sidebar-details">
                        <div class="content-style-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="content-side">
                                        <h3>الخدمات</h3>
                                        <ul class="list">
                                            <li>
                                                <p>بناء وتطوير نماذج الأعمال وإدارتها المالية</p>
                                            </li>
                                            <li>
                                                <p>إعداد خطط العمل والتطوير الإداري</p>
                                            </li>
                                            <li>
                                                <p>سياسات التحول الرقمي في بيئة الأعمال</p>
                                            </li>
                                            <li>
                                                <p>حلول تسويقية متكاملة</p>
                                            </li>
                                            <li>
                                                <p>التحكيم المالي وحل النزاعات التجارية. </p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="img-box">
                                        <figure><img
                                                src="{{ asset('assets/images/service/digital_transformation.jpg') }}"
                                                alt=""></figure>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service details end -->

</x-site.master-ar>
