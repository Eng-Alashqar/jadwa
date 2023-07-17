<x-site.master title="The platform – Jadwa’s Virtual Oasis">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="The platform – Jadwa’s Virtual Oasis">
        <meta property="twitter:title" content="The platform – Jadwa’s Virtual Oasis">
        <meta itemprop="name" content="The platform – Jadwa’s Virtual Oasis">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.index','platform') }}">
        <meta property="og:url" content="{{ route('site.en.index','platform') }}">
        <meta property="twitter:url" content="{{ route('site.en.index','platform') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- page title -->
    <div class="program2-bg centered">
        <div class="container">
            <div class="text">The platform – Jadwa’s Virtual Oasis</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">Home</a><i class="fa fa-angle-right"></i>The platform – Jadwa’s virtual oasis
            <div class="share"><i class="fa fa-share-alt" aria-hidden="true"></i>Share</div>
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- service details -->
    <section class="service-details">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12 service-colmun">
                    <div class="sidebar-details">

                        <div class="content-style-two">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="content-side">
                                        <h4>Working Platform</h4>
                                        <div class="text"><p>It is a virtual workspace developed by Jadwa to connect experts, accountants and business owners in a carefully designed software solutions environment that can serve every category according to their needs.</p></div>
                                        <div class="content-side">
                                            <h5>Capacity Building</h5>
                                            <ul class="list">
                                                <li><p>Business Leaders Training Program</p></li>
                                                <li><p>Accountants qualification and training program</p></li>
                                                <li><p>Field training for students and graduates</p></li>

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="img-box"><figure><img src="{{ asset('assets/images/service/platform.jpg') }}" alt=""></figure></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service details end -->

</x-site.master>
