  <!-- main footer area -->
  <footer class="main-footer sec-pad">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="logo-widget footer-widget">
                    <div class="footer-logo">
                        <a href="{{ route('site.en.index', 'index') }}"></a>
                    </div>
                    <div class="text">
                        <p>
                            An institution working in the field of economic consulting and
                            entrepreneurship, established in April 2012 in Gaza City -
                            Palestine. Jadwa aims to improve the efficiency of economic
                            units; Through programmed and based interventions according to
                            a careful analysis related to the internal business
                            environment.
                        </p>
                    </div>
                    <div class="button">
                        <a href="https://aliphia.com/v1/app/" class="btn-one style-one radi"> Aliphia</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="service-widget footer-widget">
                    <div class="footer-title">
                        <h4>Programs</h4>
                    </div>
                    <ul class="list">
                        <li><a href="{{ route('site.en.index', 'digital') }}">Digital
                                transformation </a></li>
                        <li><a href="{{ route('site.en.index', 'platform') }}">The platform – Jadwa’s
                                virtual oasis</a></li>
                        <li><a href="{{ route('site.en.index', 'studies') }}">Studies, reports and market
                                research</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4  col-sm-6 col-xs-12 footer-colmun">
                <div class="subscribe-widget footer-widget">
                    <div class="logo-design">
                        <div class="footer-logodes">
                            <div class="footer-title">
                                <h4>Supporting Institutions</h4>
                            </div> <a href="{{ route('site.en.index', 'index') }}"><img
                                    src="{{ asset('assets/images/footer/logo white-02.svg') }}"></a>
                            <a href="https://aliphia.com/v1/app/"><img
                                    src="{{ asset('assets/images/footer/alphya.svg') }}"></a>
                        </div>
                    </div>
                    <ul class="footer-social">
                        <li>
                            <a href="https://www.facebook.com/JadwaConsulting" class="active"><i
                                    class="fa-brands fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="https://twitter.com/home"><i class="fa-brands fa-twitter"></i></a>
                        </li>
                        <li>
                        <li>
                            <a href="https://www.linkedin.com/company/jadwaconsulting/"><i
                                    class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/jadwa.ps/"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- main footer area end -->

<!-- footer bottom -->
<section class="footer-bottom centered">
    <div class="container">
        <div class="copyright">
            <p>Copyright © {{ date('Y') }} All Right Reserved to {{ config('app.name') }} </p>
        </div>
    </div>
</section>
