     <!--sticky header-->
     <div class="sticky-header">
         <div class="container clearfix">
             <div class="row">
                 <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                     <div class="logo-box">
                         <a href="{{ route('site.en.index', 'index') }}"></a>
                     </div>
                 </div>
                 <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
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
                                     <li class="current"><a href="{{ route('site.en.index', 'index') }}">Home</a></li>
                                     <li class="dropdown"><a href="javaScript:void0;">About</a>
                                         <ul>
                                             <li><a href="{{ route('site.en.index', 'about') }} ">Who us</a>
                                             </li>
                                             <li><a href="{{ route('site.en.news') }}"> Our
                                                     News</a></li>

                                         </ul>
                                     </li>
                                     <li class="dropdown"><a href="#">Our Programs</a>
                                         <ul>
                                             <li><a href="{{ route('site.en.index', 'digital') }}">Digital
                                                     transformation
                                                 </a></li>
                                             <li><a href="{{ route('site.en.index', 'platform') }}">The
                                                     platform – Jadwa’s virtual oasis</a></li>
                                             <li><a href="{{ route('site.en.index', 'studies') }}">Studies,
                                                     reports and market research</a></li>
                                         </ul>
                                     </li>
                                     <li><a href="{{ route('site.en.course') }}">Training</a>
                                     </li>
                                     <li><a href="{{ route('site.en.blog') }}">Blog</a>
                                     </li>
                                     <li><a href="{{ route('site.en.index', 'contact') }}">Contact Us</a>
                                     </li>
                                     <li><a href="{{ route('site.ar.index', 'index') }}"><i
                                                 class="material-icons">g_translate</i></a>
                                     </li>
                                 </ul>
                             </div>
                         </nav>
                         <!-- <div class="info-box">
            <div class="button"><a href="#" class="btn-one style-one radi">login</a></div>
          </div> -->
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- end sticky header -->
