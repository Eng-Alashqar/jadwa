<x-site.master-ar title="دراسات وتقارير وأبحاث السوق">
    <x-slot name="meta">
        <meta property="og:site_name" content="جدوى للاستشارات وحلول الاعمال">
        <meta property="og:title" content="دراسات وتقارير وأبحاث السوق">
        <meta property="twitter:title" content="دراسات وتقارير وأبحاث السوق">
        <meta itemprop="name" content="دراسات وتقارير وأبحاث السوق">
        <meta property="og:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta name="twitter:image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta itemprop="image" content="{{ asset('assets/images/logo/jadwa.png') }}">
        <meta NAME="robots" content="INDEX, FOLLOW">
        <meta property="og:type" content="article" />
        <link rel="canonical" href="{{ route('site.ar.index','studies') }}">
        <meta property="og:url" content="{{ route('site.ar.index','studies') }}">
        <meta property="twitter:url" content="{{ route('site.ar.index','studies') }}">
        <meta http-equiv="refresh" content="300" />
    </x-slot>

  <!-- page title -->
  <div class="program3-bg-ar centered">
    <div class="container">
      <div class="text">دراسات وتقارير وأبحاث السوق</div>
    </div>
  </div>
  <!-- end page title -->

  <!-- bread-crumb -->
  <div class="bread-crumb">
    <div class="container">
      <div class="text"><a href="{{ route('home') }}">االرئيسية</a><i class="fa fa-angle-left"></i>دراسات وتقارير وأبحاث السوق
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
                    <h3>الخدمات</h3>
                    <ul class="list">
                      <li>
                        <p>تقييم ومتابعة البرامج والمشاريع</p>
                      </li>
                      <li>
                        <p>دراسة الجدوى</p>
                      </li>
                      <li>
                        <p>بحث المستهلك عن العملاء</p>
                      </li>
                      <li>
                        <p>دراسات وأبحاث المنافسين</p>
                      </li>
                      <li>
                        <p>تحليل السياسات</p>
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
</x-site.master-ar>
