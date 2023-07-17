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
                                                    href="{{ route('site.ar.index', 'index') }}">الرئيسية</a>
                                            </li>
                                            <li class="dropdown"><a href="#">عن جدوى <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('site.ar.index', 'about') }}">من نحن
                                                        </a></li>
                                                    <li><a href="{{ route('site.ar.news') }}">
                                                            اخبارنا</a></li>

                                                </ul>
                                            </li>
                                            <li class="dropdown"><a href="#">برامجنا <i
                                                        class="fa fa-angle-down"></i></a>
                                                <ul>
                                                    <li><a href="{{ route('site.ar.index', 'digital') }}">التحول
                                                            الرقمي   </a></li>
                                                    <li><a href="{{ route('site.ar.index', 'platform') }}">المنصة
                                                            - واحة جدوى الافتراضية</a></li>
                                                    <li><a href="{{ route('site.ar.index', 'studies') }}">
                                                           أبحاث ودراسات السوق</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ route('site.ar.course') }}">التدريب</a>
                                            </li>
                                            <li><a href="{{ route('site.ar.blog') }}">المدونة</a>
                                            </li>
                                            <li><a href="{{ route('site.ar.index', 'contact') }}">تواصل معنا</a>
                                            </li>
                                            <li><a href="{{ route('site.en.index', 'index') }}"><i
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
                            <a href="{{ route('site.ar.index', 'index') }}"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end sticky header -->
