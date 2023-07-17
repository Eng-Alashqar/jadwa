   <!-- main footer area -->
   <footer class="main-footer sec-pad">
    <div class="container">
        <div class="row" dir="rtl">
            <div class="col-md-4  col-sm-6 col-xs-12 footer-colmun">
                <div class="subscribe-widget footer-widget">
                    <div class="logo-design">
                        <div class="footer-logodes">
                            <div class="footer-title">
                                <h4>الشركاء</h4>
                            </div> <a href="{{ route('site.ar.index', $page = 'index_ar') }}"><img
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
                            <a href="https://www.linkedin.com/company/77684098/admin/"><i
                                    class="fa-brands fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/jadwa.ps/"><i
                                    class="fa-brands fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="service-widget footer-widget">
                    <div class="footer-title">
                        <h4>البرامج</h4>
                    </div>
                    <ul class="list">
                        <li><a href="{{ route('site.ar.index', $page = 'digital') }}">التحول الرقمي وتطوير بيئة
                                الأعمال</a></li>
                        <li><a href="{{ route('site.ar.index', $page = 'platform') }}">المنصة - واحة جدوى
                                الافتراضية</a></li>
                        <li><a href="{{ route('site.ar.index', $page = 'studies') }}">الدراسات والتقارير وأبحاث
                                السوق</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12 footer-colmun">
                <div class="logo-widget footer-widget">
                    <div class="footerlogo-direc">
                        <a href="index.html"></a>
                    </div>
                    <div class="text">
                        <p>
                            مؤسسة تعمل في مجال الاستشارات الاقتصادية وريادة الأعمال ، تأسست في نيسان 2012 في مدينة
                            غزة - فلسطين.
                            تهدف جدوى إلى تحسين كفاءة الوحدات الاقتصادية ؛ من خلال تدخلات مبرمجة وقائمة على تحليل
                            دقيق يتعلق ببيئة
                            الأعمال الداخلية.
                        </p>
                    </div>
                    <div class="button">
                        <a href="https://aliphia.com/v1/app/" class="btn-one style-one radi"> ألف ياء</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- main footer area end -->

<!-- footer bottom -->
<section class="footer-bottom centered rtl ">
    <div class="container">
        <div class="copyright">
            <p>جميع الحقوق ©{{ date('Y') }} محفوظة لصالح شركة جدوى  </p>
        </div>
    </div>
</section>

