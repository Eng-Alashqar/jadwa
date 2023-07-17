@extends('jadwa.master_ar')
@section('title',' الرئيسية')
@section('content')

  <!-- main slider -->
  <div class="slider-container rtl">
    <div class="slider-control right inactive"> </div>
    <div class="slider-control left"></div>
    <ul class="slider-pagi"></ul>
    <div class="slider">
      <div class="slide slide-0 active">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <svg class="slide__overlay " viewBox="0 0 150 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 160,0 160,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 style="line-height: 40px; ">حسابات شركتك منظمة في مكان واحد</h2>
            <p class="slide__text-desc">بعد يوم من المبيعات يمكنك أن تجد كل أعمالك في مكان واحد.</p>
          </div>
        </div>
      </div>
      <div class="slide slide-1 ">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <svg class="slide__overlay " viewBox="0 0 150 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 160,0 160,405 0,405" />
          </svg>

          <div class="slide__text">
            <h2 style="line-height: 40px; ">واحة جدوى - المنصة </h2>
            <p class="slide__text-desc">لا قلق بعد الآن وظيفتك وأنت في بيتك</p>
          </div>
        </div>
      </div>
      <div class="slide slide-2">
        <div class="slide__bg"></div>
        <div class="slide__content">
          <svg class="slide__overlay " viewBox="0 0 150 405" preserveAspectRatio="xMaxYMax slice">
            <path class="slide__overlay-path" d="M0,0 160,0 160,405 0,405" />
          </svg>
          <div class="slide__text">
            <h2 style="line-height: 40px; ">تأهيل ذوي الاحتياجات الخاصة </h2>
            <p class="slide__text-desc">تدريب المحاسبين ذوي الاحتياجات الخاصة وتأهيلهم لسوق العمل</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- main slider end -->

  <!--Why choose Us-->
  <section class="why-us sec-pad rtl">
    <div class="container">
      <div class="feature-title centered">
        <div class="section-title">
          <h2>لماذا جدوى</h2>
        </div>
        <div class="title-text"></div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa-solid fa-pen-to-square"></i>
          </div>
          <p>ادارة أعمالك بطريقة احترافية</p>
        </div>
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa-solid fa-calculator"></i>
          </div>
          <p>إحداث نقلة نوعية في مهنة المحاسبة</p>
        </div>
        <div class="col-lg-4">
          <div class="icon">
            <i class="fa-solid fa-chart-line"></i>
          </div>
          <p>تكامل مكونات العمل الاقتصادي</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Choose Us-->

  <!-- About us section -->
  <section class="sec-pad rtl">
    <div class="container">
      <div class="feature-title centered">
        <div class="section-title">
          <h2>عن جدوى</h2>
        </div>
        <div class="title-text"></div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="aboutTitle">
            <p> جدوى</p>
          </div>
          <div class="aboutContent">
            <p>مؤسسة تعمل في مجال الاستشارات الاقتصادية وريادة الاعمال تأسست في إبريل 2012 في مدينة غزة – فلسطين. تهدف
              جدوى لتحسين كفاءة الوحدات الاقتصادية؛ عبر تدخلات مبرمجة ومبنية وفقا لتحليل دقيق مرتبط ببيئة الاعمال
              الداخلية بالإضافة للعوامل المؤثرة في بيئة غير مستقرة </p>
          </div>
          <div class="btnAbout">
            <button><a href="{{ route('jadwa.index', $page='about-ar') }}" class="btn-one style-one radi">معرفة المزيد</a></button>
          </div>
        </div>
        <div class="col-lg-6">
          <img class="aboutImg" src="{{asset('assets/images/home/about-us.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </section>
  <!-- About us section end -->

  <!-- service section -->
  <section class="service-section">
    <div class="container-fullid">
      <div class="row">
        <div class="col-md-4 col-sm-6 col-sm-12 service-colmun">
          <div class="service-title">
            <div class="sec-title">
              <h2>برامجنا</span></h2>
            </div>
            <div class="text">
              <p>لدى جدوى أهداف تتعلق بعملية التشغيل وخلق فرص عمل من خلال الاستثمار في المورد البشري، وتقديم نموذج مختلف
                للعمل المحاسبي يجمع بين المحاسبين والخبراء وأصحاب الاعمال من خلال منصة واحدة</p>
            </div>
            <!-- <div class="indecators">
              <span><i class="fa fa-angle-left"></i></span>
              <span><i class="fa fa-angle-right"></i></span>
            </div> -->
          </div>
        </div>
        <div class="col-md-8 col-sm-12 col-xs-12 service-colmun">
          <div class="three-column-carousel">
            <div class="single-item">
              <div class="icon-box"><a href="service-details.html"><i class="fa-solid fa-chalkboard-user"></i></a></div>
              <h5><a href="digital transformation.html">التحول الرقمي وتطوير بيئة الأعمال</a></h5>
              <div class="text">
                <p>
                    نسعى من خلال هذا البرنامج تحقيق بناء مؤسسي سليم موائم لبيئة الاعمال المتطورة، يستند إلى تقنيات العمل السحابي
                 </p>
              </div>
            </div>
            <div class="single-item">
              <div class="icon-box"><a href="service-details.html"><i class="fa-solid fa-users"></i></a></div>
              <h5><a href="the platform.html">المنصة - واحة جدوى الافتراضية</a></h5>
              <div class="text">
                <p>مساحة عمل افتراضية طورتها جدوى لربط الخبراء والمحاسبين وأصحاب الاعمال في بيئة حلول برمجية مصممة
                  بعناية </p>
              </div>
            </div>
            <div class="single-item">
              <div class="icon-box"><a href="service-details.html"><i class="fa-solid fa-arrow-trend-up"></i></a></div>
              <h5><a href="studies.html">الدراسات والتقارير وأبحاث السوق</a></h5>
              <div class="text">
                <p>نمتلك فريق متخصص من الخبراء في مجالات متعددة ترتبط بطبيعة عمل الشركة، يعمل هؤلاء الخبراء على تحليل
                  البيئة الاقتصادية بمستوييها الكلي والجزئي</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- feature section end -->

  <!-- testimonial section -->
  <section class="testimonial-section sec-pad">
    <div class="container">
      <div class="testimonial-title centered">
        <div class="section-title">
          <h2>آراء العملاء</h2>
        </div>
        <div class="title-text"></div>
      </div>
      <div class="testimonial-slider">
        @if ($commit)
        @foreach ($commit as $i)
        <div class="testimonial-content">
          <div class="authore-info rtl">
            <div class="img-box">
              <figure><img src="{{ asset('uploads/' . $i->image_name) }}" alt="person-1" class="test-person"></figure>
            </div>
            <div class="author-meta">
              <h4> {{ $i->name_ar }}</h4>
              <p>{{$i->institution_ar}}</p>
            </div>
          </div>
          <div class="text">
            <p>
                {!! $i->content_ar !!} </p>
          </div>
        </div>
        @endforeach
        @endif
      </div>
    </div>
  </section>
  <!-- testimonial section end -->

  <!-- fact-counter -->
  <section class="fact-counter centered rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
          <div class="single-item">
            <article class="column wow fadeIn" data-wow-duration="0ms">
              <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="20">0</span><span>+</span>
              </div>
              <div class="text">سنوات الخبرة</div>
            </article>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
          <div class="single-item">
            <article class="column wow fadeIn" data-wow-duration="0ms">
              <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="120">0</span><span>+</span>
              </div>
              <div class="text">عميلاَ سعيداَ</div>
            </article>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
          <div class="single-item">
            <article class="column wow fadeIn" data-wow-duration="0ms">
              <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="50">0</span><span>+</span>
              </div>
              <div class="text">متدرباَ</div>
            </article>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12 counter-colmun">
          <div class="single-item">
            <article class="column wow fadeIn" data-wow-duration="0ms">
              <div class="count-outer"><span class="count-text" data-speed="1500" data-stop="60">0</span><span>+</span>
              </div>
              <div class="text">خبيراَ</div>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- fact-counter section end -->


  <!-- team section -->
  <section class="our-team sec-pad rtl">
    <div class="container">
      <div class="team-title centered">
        <div class="section-title">
          <h2>خبرائنا</h2>
        </div>
        <div class="title-text">
          <p>أكثر من 60 خبير في مجالات متعددة</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun">
          <div class="bxslider">
           @foreach ($experts as $i )
           <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-12 team-colmun">

              <div class="team-content">
                <div class="team-info">
                  <div class="team-text">
                   {{ $i->name_ar }}
                  </div>
                  <span>{{ $i->jop_description_ar }}</span>
                </div>
                <div class="text" style="text-align: justify;">
                  <p>
                    {{ $i->content_ar }}
                 </p>
                </div>
                <div class="team-contact">
                  <div class="text">
                    <strong>الهاتف:</strong>&nbsp; &nbsp;{{ $i->phone }}
                  </div>
                  <div class="text">
                    <strong>الايميل:</strong>&nbsp; &nbsp;{{ $i->email }}
                  </div>
                </div>
                <ul class="team-social">
                  <li>
                    <a href="{{ $i->twitter }}" class="active"><i class="fa-brands fa-twitter"></i></a>
                  </li>
                  <li>
                    <a href="{{ $i->linkedln }}"><i class="fa-brands fa-linkedin"></i></a>
                  </li>
                  <li>
                    <a href="{{ $i->facebook }}"><i class="fa-brands fa-facebook"></i></a>
                  </li>
                  <li>
                    <a href="{{ $i->skay }}"><i class="fa-brands fa-skype"></i></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12 team-colmun">
              <div class="clearfix">
                <figure class="img-box pull-left">
                    <img src="{{ asset('uploads/' . $i->image) }} "
                    alt="" />
                </figure>
              </div>
            </div>
          </div>
           @endforeach

          </div>
          <div class="slider-pager">
            <div class="center">
              <ul class="nav-link list-inline">
                <li id="slider-prev"></li>
                <li id="slider-next"></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1 team-colmun ">
          <div class="row">
            <div class="col-md-5">
              <div class="slider-pager">
                <ul class="list-inline thumb-box style2">

                    @php
                    $x = 0;
                @endphp
                @foreach ($experts as $expert)
                    <li>
                        <a class="active" data-slide-index="{{ $x }}" href="#">
                            <figure>
                                <img src="{{ asset('uploads/' . $expert->image) }}" alt="" />
                            </figure>
                        </a>
                    </li>
                    @php
                        $x++;
                    @endphp
                    @endforeach

                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team section end -->

  <!-- choose-accountent-section -->
  <section class="call-back sec-pad rtl">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-sm-12 col-xs-12 colmun">
          <div class="call-back-content">
            <div class="call-back-title">
              <div class="section-title">
                <h2>اختار خبيرك</h2>
              </div>
              <div class="title-text">
                <p>  إختر الخبير الذي تريد التواصل معه من خلال تعبئة الطلب</p>
              </div>
            </div>
            <div class="form-area">
                <form action="javascript:void(0);">
                   
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                    <input type="text" placeholder="الاسم" name="name">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                    <input type="email" placeholder="الايميل" name="email">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                    <input type="text" placeholder="الهاتف" name="phone">
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12 colmun">
                    <div class="select-box">
                      <i class="fa fa-angle-down"></i>
                      <select class="custom-select-box" name="expert">
                        <option>اختار خبيرك</option>
                        @foreach ($experts as $i)
                        <option value="{{ $i->name_ar }}">{{ $i->name_ar }}</option>
                    @endforeach
                      </select>
                    </div>
                  </div>
                </div>
                <div class="button">
                  <button class="white-btn white-btn-style">أرسل الطلب</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- choose-accountent-section end -->



  <!-- sponsors section -->
  <div id="ourclients">
    <center>
      <h2>عملاؤنا</h2>
      <div class="title-text">
        <p>أكثر من 50 عميل في العديد من البلدان</p>
      </div>
    </center>
    <div class="clients-wrap">
        <var>
            <ul id="clientlogo" class="clearfix">
                @foreach ($clients as $i)
                    <li>
                        <img src="{{ asset('uploads/' . $i->image_name) }}" alt="" />
                    </li>
                @endforeach

            </ul>
        </var>

    </div>
  </div>
  <!-- sponsors section end -->
@stop
