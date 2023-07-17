<x-site.master-ar title="المنصة - واحة جدوى الافتراضية">
    <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="المنصة - واحة جدوى الافتراضية">
        <meta property="twitter:title" content="المنصة - واحة جدوى الافتراضية">
        <meta itemprop="name" content="المنصة - واحة جدوى الافتراضية">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.index','platform') }}">
        <meta property="og:url" content="{{ route('site.ar.index','platform') }}">
        <meta property="twitter:url" content="{{ route('site.ar.index','platform') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>


  <!-- page title -->
  <div class="program2-bg-ar centered">
    <div class="container">
      <div class="text">المنصة - واحة جدوى الافتراضية</div>
    </div>
  </div>
  <!-- end page title -->

  <!-- bread-crumb -->
  <div class="bread-crumb">
    <div class="container">
      <div class="text"><a href="{{ route('home') }}">الرئيسية</a><i class="fa fa-angle-left"></i>المنصة - واحة جدوى الافتراضية
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
                    <h3> </h3>
                    <div class="text">
                      <p>إنها مساحة عمل افتراضية طورتها جدوى لربط الخبراء والمحاسبين وأصحاب الأعمال في بيئة حلول برمجية
                        مصممة بعناية يمكن أن تخدم كل فئة وفقًا لاحتياجاتهم.</p>
                    </div>
                    <div class="content-side">
                      <h5>بناء القدرات</h5>
                      <ul class="list">
                        <li>
                         <p>برنامج إعداد قادة الأعمال</p>
                         </li>
                        <li>
                          <p>برنامج تأهيل وتدريب المحاسبين</p>
                        </li>
                        <li>
                          <p>التدريب الميداني للطلاب والخريجين</p>
                        </li>

                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 service-colmun">
                  <div class="img-box">
                    <figure><img src="{{ asset('assets/images/service/platform.jpg') }}" alt=""></figure>
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
