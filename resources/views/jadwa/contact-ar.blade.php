@extends('jadwa.master_ar')
@section('title', 'تواصل معنا')
@section('content')
    <!-- page title -->
    <div class="contact-bg-ar centered">
        <div class="container">
            <div class="text">تواصل معنا</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page='index_ar') }}">الرئيسية</a><i class="fa fa-angle-left"></i> تواصل معنا
            </div>
        </div>
    </div>
    <!-- bread crumb end -->

    <!-- contact-info -->
    <section class="contact-info contact-page centered">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div class="title">الموقع</div>
                        <div class="text">
                            <p>فلسطين - عزة - الرمال<br /> برج بنك فلسطين</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">الهاتف</div>
                        <div class="text">
                            <p>00972567837770<br /> 0097082837770</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">الايميل</div>
                        <div class="text">
                            <p><a href="#">info@jadwa.ps</a><br />.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->

    <!-- faq sectione -->
    <section class="faq-section">
        <div class="container" style="
        direction: rtl;
    ">
            <div class="team-title centered">
                <div class="section-title">
                    <h2>أسئلة وأجوبة</h2>
                </div>
                <div class="title-text">
                    <p>الأسلة الأكثر شيوعا</p>
                </div>
            </div>
            <div class="row">
                <div class=" col-sm-10 col-xs-12 faq-colmun">
                    <div class="faq-content">
                        <div class="accordion-box">
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">من هى جــــدوى للاسـتـشــارات الاقتصادية وحلول الأعمال؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>مؤسسة تعمل في مجال الاستشارات الاقتصادية وريادة الاعمال تأسست في إبريل 2012 في
                                        مدينة غزة – فلسطين. تهدف جدوى لتحسين كفاءة الوحدات الاقتصادية؛ عبر تدخلات مبرمجة
                                        ومبنية وفقا لتحليل دقيق مرتبط ببيئة الاعمال الداخلية بالإضافة للعوامل المؤثرة في
                                        بيئة غير مستقرة.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    <div class="acc-title">ما هى منصة جدوى؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content collapsed">
                                                       
                                    <p>هي مساحة عمل افتراضية طورتها جدوى لربط الخبراء والمحاسبين وأصحاب الاعمال في بيئة
                                        حلول برمجية مصممة بعناية، يمكنها أن تخدم كل فئة حسب احتياجاتها بما في ذلك المرأة
                                        وذوي الإحتياجات الخاصة الذين يواجهون تحديات في بيئة الاعمال التقليدية، كذلك تستجيب لتغيرات
                                        بيئة الاعمال المعقدة، وتحقق نقلة نوعية في مهنة المحاسبة. وتوفر فرص تدريب محاكية
                                        للواقع للطلاب تحت التخرج.</p>
                             </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">ما هى برامج شركة جدوى؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <h5>أولاً: التحول الرقمي وتطوير بيئة الأعمال:</h5>
                                    <p>نسعى من خلال هذا البرنامج لتحقيق بناء مؤسسي سليم موائم لبيئة الاعمال المتطورة،
                                        يستند الى تقنيات العمل السحابية عبر الويب، ويحقق التكامل الكفؤ بين الموارد
                                        المالية والبشرية والتكنولوجيا؛ وهو ما يساهم في توسيع نطاق عمل منظمات الاعمال،
                                        وتحقيق متطلبات بقائها ونموها المستدام.</p>
                                    <h5>ثانياً: المنصة (واحة جدوى):</h                    
 <p>هي مساحة عمل افتراضية طورتها جدوى لربط الخبراء والمحاسبين وأصحاب الاعمال في بيئة
                                        حلول برمجية مصممة بعناية، يمكنها أن تخدم كل فئة حسب احتياجاتها بما في ذلك المرأة
                                        وذوي الإحتياجات الخاصة الذين يواجهون تحديات في بيئة الاعمال التقليدية، كذلك تستجيب لتغيرات
                                        بيئة الاعمال المعقدة، وتحقق نقلة نوعية في مهنة المحاسبة. وتوفر فرص تدريب محاكية
                                        للواقع للطلاب تحت التخرج.</p>
                             >
                                    <h5>ثالثاً: الدراسات وابحاث السوق</h5>
                                    <p>تمتلك جدوى فريق متخصص من الخبراء في مجالات متعددة ترتبط بطبيعة عمل الشركة، يعمل
                                        هؤلاء الخبراء على تحليل البيئة الاقتصادية بمستوييها الكلي (السياساتي) والجزئي
                                        (منظمات الاعمال)، لدراسة أفضل الخيارات وأكثرها كفاءة. كذلك تسعى جدوى لاستكمال
                                        بنيتها البحثية من خلال العمل على مدونتها المتخصصة في المال والاعمال، ومجلتها
                                        السنوية التي سوف تتخصص في مواضيع دقيقة حول الحلول والتدخلات التي يتم العمل عليها
                                        داخل الشركة وتوثيقها على شكل اوراق علمية، بالإضافة للاستكتابات المتخصصة.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">ما هو الهدف العام من التدريب؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>الهدف العام : اعداد محاسب يمتلك المهارات المعرفية والتكنولوجية اللازمة للعمل في
                                        بيئة متنوعة الانشطة</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">ما هى أهداف التدريب؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <ol>
                                        <li>بناء شخصية مناسبة لعمل المحاسبين</li>
                                        <li>تحليل أنشطة منظمات الأعمال وفقاً لنموذج عملها</li>
                                        <li>معرفة ما يريده العميل من المحاسب، والتعامل مع مخرجات النظام المحاسبي</li>
                                        <li>الالمام بأخلاقيات وسياسات خصوصية العمل المحاسبي والمالي</li>
                                        <li>تعزيز مهارات العمل المؤسسي لدى المتدرب وتحسين تواصله الشخصي</li>
                                        <li>بناء مهارات العمل في بيئة التحول الرقمي</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">الفئة المستهدفة من التدريب؟</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <ul>
                                        <li>طلاب تحت التخرج</li>
                                        <li>حديثي التخرج</li>
                                        <li>المقبلين على سوق العمل</li>
                                        <li>العاملين في المحاسبة – العمل الحر</li>
                                        <li>العاملين في الشركات التي تشرف عليها جدوى</li>
                                        <li>المستهدفين عبر اتفاقات جدوى</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- faq sectione end -->

    <!-- contact-section -->
    <section class="contact-section contact-page">
        <div class="container">
            <div class="row">

            <div class="m-5">
                @if (session('msg'))
                <div class="alert alert-{{ session('type') }} m-5">
                <strong>{{ session('msg') }}</strong>
                </div>
                @endif



                @if ($errors->any())
                <div class="alert alert-danger m-5">
                    @foreach ($errors->all() as $i)
                    <strong>{{ $i}}</strong>
                    @endforeach
                </div>
                @endif
            </div>

                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="google-map-area">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13604.283352256696!2d34.448998399999994!3d31.522214299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7fe4d395ad91%3A0xff2a7f9c6c4b0a00!2z2KzYr9mI2Ykg2YTZhNin2LPYqti02KfYsdin2Kog2KfZhNin2YLYqti12KfYr9mK2Kkg2YjYrdmE2YjZhCDYp9mE2KPYudmF2KfZhA!5e0!3m2!1sen!2s!4v1660649242281!5m2!1sen!2s"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="contact-form-area" style="
                    direction: rtl;
                    margin-left: 3%;
                ">
                        <div class="title" style="
                        margin-top: 12rem;
                    ">
                            <h2>ارسل ايميلا</h2>
                        </div>
                        <div class="text" >
                            <p>لدينا العديد من المختصين والفنيين للرد على الاستفسارات والاستشارات المالية، كن بالقرب منا
                                وتواصل معنا، أو قم بزيارتنا في مقر عملنا الكائن في مدينة غزة، الرمال، برج بنك فلسطين</p>
                        </div>
                          <form    action="javascript:void(0);"
                           >
                           
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_name" value="" placeholder="الاسم" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="form_email" value="" placeholder="الايميل" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_Phone" value="" placeholder="الهاتف" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="form_Subject" value="" placeholder='الموضوع' required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="الرسالة" name="form_message" required=""></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-one style-one radi">ارسال</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- contact section end -->
@stop
