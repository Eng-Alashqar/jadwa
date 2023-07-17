<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=0.7, user-scalable=no">
    <meta name="description"
        content="مؤسسة تعمل في مجال الاستشارات الاقتصادية وريادة الاعمال تأسست في إبريل 2012 في مدينة غزة – فلسطين. تهدف جدوى لتحسين كفاءة الوحدات الاقتصادية؛ عبر تدخلات مبرمجة ومبنية وفقا لتحليل دقيق مرتبط ببيئة الاعمال الداخلية بالإضافة للعوامل المؤثرة في بيئة غير مستقرة">
    <meta>
    <meta name="author" content="جدوى للاستشارات وحلول الاعمال">
    <meta name="Keywords" content="جدوى, اعمال , استشارات ,تكنولوجيا,
    حديثة">
    <meta name="google-site-verification" content="fwwJTLIsfNulN3ePwcJ94UuAE05ImCAECi1nqqN9DVM" />

    <title> جدوى للإستشارات | @yield('title') </title>

    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link rel="canonical" hreflang="https://jadwa.ps/index_ar.html" />
    <link rel="alternate" media="only screen and (max-width: 640px)"href="https://jadwa.ps" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="{{ asset('assets/css/custom/theme-2.css') }}" />
    <link rel="icon" href="{{ asset('assets/images/logo/jadwa.png') }}" type="image/x-icon">
    <link href="{{ asset('assets/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link rel='stylesheet'
        href='https://cdn-uicons.flaticon.com/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="{{ asset('assets/css/rtl.css') }}" rel="stylesheet">

</head>

<!-- page wrapper -->

<body iass="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
    <!-- main header area -->
    <header class="main-header rtl">
        <!-- header lower -->
        <div class="header-lower">
            <div class="container">
                <div class="row">
                    <div class="rtl-header">
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <div class="menu-bar">
                                <nav class="main-menu1">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a
                                                    href="{{ route('jadwa.index', $page = 'index_ar') }}">الرئيسية</a>
                                            </li>
                                            <li class="dropdown"><a href="#">عن جدوى <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('jadwa.index', $page = 'about-ar') }}">من نحن
                                                        </a></li>
                                                    <li><a href="{{ route('jadwa.index', $page = 'news-paper') }}">
                                                            اخبارنا</a></li>
                                                    <li><a href="https://aliphia.com/v1/app/"> تسجيل للنظام</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">برامجنا <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('jadwa.index', $page = 'digital-ar') }}">التحول
                                                            الرقمي وتطوير بيئة الأعمال</a></li>
                                                    <li><a
                                                            href="{{ route('jadwa.index', $page = 'the platform-ar') }}">المنصة
                                                            - واحة جدوى الافتراضية</a></li>
                                                    <li><a href="{{ route('jadwa.index', $page = 'studies-ar') }}">الدراسات
                                                            والتقارير وأبحاث السوق</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'training-ar') }}">التدريب</a>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'our-blog-ar') }}">المدونة</a>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'contact-ar') }}">تواصل
                                                    معنا</a>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'index') }}"><i
                                                        class="material-icons">g_translate</i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="logo-box-up">
                            <a href="{{ route('jadwa.index', $page = 'index_ar') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header lower -->

        <!--sticky header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <div class="row">
                    <div class="rtl-header">
                        <div class="col-md-11 col-sm-12 col-xs-12">
                            <div class="menu-bar">
                                <nav class="main-menu">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="navbar-collapse collapse clearfix">
                                        <ul class="navigation clearfix">
                                            <li class="current"><a
                                                    href="{{ route('jadwa.index', $page = 'index_ar') }}">الرئيسية</a>
                                            </li>
                                            <li class="dropdown"><a href="#">عن جدوى <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('jadwa.index', $page = 'about-ar') }}">من
                                                            نحن
                                                        </a></li>
                                                    <li><a href="{{ route('jadwa.index', $page = 'news-paper') }}">
                                                            اخبارنا</a></li>
                                                    <li><a href="https://aliphia.com/v1/app/"> تسجيل للنظام</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">برامجنا <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('jadwa.index', $page = 'digital-ar') }}">التحول
                                                            الرقمي وتطوير بيئة الأعمال</a></li>
                                                    <li><a
                                                            href="{{ route('jadwa.index', $page = 'the platform-ar') }}">المنصة
                                                            - واحة جدوى الافتراضية</a></li>
                                                    <li><a href="{{ route('jadwa.index', $page = 'studies-ar') }}">الدراسات
                                                            والتقارير وأبحاث السوق</a></li>
                                                </ul>
                                            </li>
                                            <li><a
                                                    href="{{ route('jadwa.index', $page = 'training-ar') }}">التدريب</a>
                                            </li>
                                            <li><a
                                                    href="{{ route('jadwa.index', $page = 'our-blog-ar') }}">المدونة</a>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'contact-ar') }}">تواصل
                                                    معنا</a>
                                            </li>
                                            <li><a href="{{ route('jadwa.index', $page = 'index') }}"><i
                                                        class="material-icons">g_translate</i></a>
                                            </li>
                                        </ul>

                                    </div>
                                </nav>
                                <!-- <div class="info-box">
                  <div class="button"><a href="#" class="btn-one style-one radi">تسجيل دخول</a></div>
                </div> -->
                            </div>
                        </div>
                        <div class="logo-box">
                            <a href="{{ route('jadwa.index', $page = 'index_ar') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sticky header -->

    </header>
    <!-- end main header area -->



    @yield('content')

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
                                </div> <a href="{{ route('jadwa.index', $page = 'index_ar') }}"><img
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
                            <li><a href="{{ route('jadwa.index', $page = 'digital-ar') }}">التحول الرقمي وتطوير بيئة
                                    الأعمال</a></li>
                            <li><a href="{{ route('jadwa.index', $page = 'the platform-ar') }}">المنصة - واحة جدوى
                                    الافتراضية</a></li>
                            <li><a href="{{ route('jadwa.index', $page = 'studies-ar') }}">الدراسات والتقارير وأبحاث
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
    <section class="footer-bottom centered ">
        <div class="container">
            <div class="copyright">
                <p>Copyright ©{{ date('Y') }} All Right Reserved to {{ env('APP_NAME') }} Consulting</p>
            </div>
        </div>
    </section>



    <!--End pagewrapper-->



    <!--jquery js -->


    <script type="text/javascript" src="{{ asset('assets/js/jquery-2.1.4.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/slider-active.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/validation.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.js') }}"></script>
    <script src="{{ asset('assets/js/bxslider.js') }}"></script>
    {{-- <script type="text/javascript" src="{{asset('assets/js/SmoothScroll.js')}}"></script> --}}
    <script type="text/javascript" src="{{ asset('assets/js/jQuery.style.switcher.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.pack.js') }}"></script>

    <script src="{{ asset('assets/revolution/js/jquery.themepunch.tools.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/jquery.themepunch.revolution.min.js') }}" type="text/javascript"></script>
    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.actions.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.carousel.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.migration.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.navigation.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.parallax.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"
        type="text/javascript"></script>
    <script src="{{ asset('assets/revolution/js/extensions/revolution.extension.video.min.js') }}" type="text/javascript">
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        setTimeout(() => {
            $('.alert').fadeOut();
        }, 6000);
    </script>
    <!-- End of .page_wrapper -->
</body>

</html>
