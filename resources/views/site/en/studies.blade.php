<x-site.master title="Studies, Reports And Market Research">
    <x-slot name="meta">
        <meta property="og:site_name" content="Jadwa Consulting and Business Solutions">
        <meta property="og:title" content="Studies, Reports And Market Research">
        <meta property="twitter:title" content="Studies, Reports And Market Research">
        <meta itemprop="name" content="Studies, Reports And Market Research">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.en.index','studies') }}">
        <meta property="og:url" content="{{ route('site.en.index','studies') }}">
        <meta property="twitter:url" content="{{ route('site.en.index','studies') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>
    <!-- page title -->
    <div class="program3-bg centered">
        <div class="container">
            <div class="text">Studies, Reports And Market Research</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('home') }}">Home</a><i class="fa fa-angle-right"></i> Studies, reports and market
                research
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
                                        <!-- <div class="text"><p>We seek, through this program, to achieve a sound institutional building that is compatible with the evolving business environment, based on cloud work techniques via the web, and achieving efficient integration between financial and human resources and technology. This contributes to expanding the scope of work of business organizations, and achieving the requirements of their survival and sustainable growth.</p></div> -->
                                        <ul class="list">
                                            <li>
                                                <p>Evaluation and follow-up of programs and projects</p>
                                            </li>
                                            <li>
                                                <p>Feasibility study</p>
                                            </li>
                                            <li>
                                                <p>Consumer customer research</p>
                                            </li>
                                            <li>
                                                <p>Competitor studies and research</p>
                                            </li>
                                            <li>
                                                <p>Policy analysis</p>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                                    <div class="img-box">
                                        <figure><img src="{{ asset('assets/images/service/Studies.jpg') }}" alt=""></figure>
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
