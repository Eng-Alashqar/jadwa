<x-site.master title="Digital Transformation">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="Digital Transformation">
        <meta property="twitter:title" content="Digital Transformation">
        <meta itemprop="name" content="Digital Transformation">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.index','digital') }}">
        <meta property="og:url" content="{{ route('site.en.index','digital') }}">
        <meta property="twitter:url" content="{{ route('site.en.index','digital') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>

    <!-- page title -->
    <div class="program1-bg centered">
        <div class="container">
            <div class="text">Digital Transformation</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">Home</a><i class="fa fa-angle-right"></i> Digital transformation
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
                                        <h4>Services</h4>
                                        <ul class="list">
                                            <li>
                                                <p>Building and developing business models and their financial
                                                    management</p>
                                            </li>
                                            <li>
                                                <p>Preparing work plans and administrative development</p>
                                            </li>
                                            <li>
                                                <p>Digital transformation policies in the business environment</p>
                                            </li>
                                            <li>
                                                <p>Integrated Marketing Solutions</p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="img-box">
                                        <figure><img src="{{ asset('assets/images/service/digital_transformation.jpg') }}" alt=""></figure>
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

</x-site.master>
