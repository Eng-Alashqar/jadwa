<x-site.master-ar title="404">
    <x-slot name="meta">

    </x-slot>
    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text">خطأ 404</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="index.html">الرئيسية</a><i class="fa fa-angle-right"></i> خطأ 404
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- error section-->
    <section class="error-section error-page text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 error-colmun">
                    <div class="error-title">404</div>
                    <div class="error-content">
                        <h2 class="section-title">يبدو انه حدث شيء ما خاطئ</h2>
                        <div class="text">
                            <p>الصفحة التي تبحث عنها غير موجودة.</p>
                        </div>
                        <div class="input-box">

                        </div>
                        <div class="error-btn">
                            <a href="{{ route('home') }}" class="btn-one style-one radi">الذهاب الى الصفحة الرئيسية</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- error serctio end -->


</x-site.master-ar>
