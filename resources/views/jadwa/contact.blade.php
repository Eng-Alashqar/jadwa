@extends('jadwa.master')
@section('title', 'Contact_us')
@section('content')
    <!-- page title -->
    <div class="contact-bg centered">
        <div class="container">
            <div class="text">Contact Us</div>
        </div>
    </div>
    <!-- end page title -->

    <!-- bread-crumb -->
    <div class="bread-crumb">
        <div class="container">
            <div class="text"><a href="{{ route('jadwa.index', $page='index') }}">Home</a><i class="fa fa-angle-right"></i> Contact Us
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
                        <div class="title">Lacation</div>
                        <div class="text"><p>Palestine - Gaza - Al-Rimal<br /> Bank of Palestine Tower</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">Phone</div>
                        <div class="text"><p>00972567837770<br /> 0097082837770</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">Email</div>
                        <div class="text"><p><a href="info@jadwa.ps">info@jadwa.ps</a><br/>.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact info end -->

    <!-- faq sectione -->
    <section class="faq-section">
        <div class="container">
            <div class="team-title centered">
                <div class="section-title"><h2>FAQ'S</h2></div>
                <div class="title-text">
                  <p>Most popular questions</p>
                </div>
              </div>
            <div class="row">
                <div class=" col-sm-10 col-xs-12 faq-colmun">
                    <div class="faq-content">
                        <div class="accordion-box">
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">Who is Jadwa for Economic Consulting and Business Solutions?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>An institution working in the field of economic consulting and entrepreneurship, it was established in April 2012 in Gaza City – Palestine. Jadwa aims to improve the efficiency of economic units; Through programmed interventions and based on a careful analysis related to the internal business environment in addition to the factors affecting an unstable environment.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn active">
                                    <div class="acc-title">What is Jadwa platform?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content collapsed">
                                    <p>It is a virtual workspace developed by Jadwa to connect experts, accountants and business owners in a carefully designed software solutions environment that can serve every category according to their needs, including women and people with disabilities who face challenges in the traditional business environment, as well as respond to the complex business environment changes, and achieve a qualitative leap in Accounting profession. It provides a virtual reality training opportunity for undergraduate students.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">What are the Jadwa programs?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <h5>First: Digital Transformation and Business Environment Development:</h5>
                                    <p>We seek, through this program, to achieve a sound institutional building that is compatible with the evolving business environment, based on cloud work techniques via the web, and achieving efficient integration between financial and human resources and technology. This contributes to expanding the scope of work of business organizations, and achieving the requirements of their survival and sustainable growth.</p>
                                    <h5>Second: The platform (Jadwa Oasis):</h5>
                                    <p>It is a virtual workspace developed by Jadwa to connect experts, accountants and business owners in a carefully designed software solutions environment that can serve every category according to their needs, including women and people with disabilities who face challenges in the traditional business environment, as well as respond to the complex business environment changes, and achieve a qualitative leap in Accounting profession. It provides a virtual reality training opportunity for undergraduate students.</p>
                                    <h5>Third: Studies and market research:</h5>
                                    <p>Jadwa has a specialized team of experts in multiple fields related to the nature of the company’s work. These experts analyze the economic environment at its macro (policy) and micro level (business organizations), to study the best and most efficient options. Jadwa also seeks to complete its research structure by working on its blog specialized in business and finance, and its annual journal, which will specialize in precise topics about solutions and interventions that are worked on within the company and documented in the form of scientific papers, in addition to specialized submissions.</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">What is the general objective of the training?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <p>General objective: To prepare an accountant who possesses the knowledge and technology skills necessary to work in a diverse environment</p>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">What are the goals of training?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <ol>
                                        <li>Building a suitable personality for the work of accountants.</li>
                                        <li>Analyzing the activities of business organizations according to their business model.</li>
                                        <li>Knowing what the client wants from the accountant, and dealing with the outputs of the accounting system.</li>
                                        <li>Knowledge of ethics and policies for accounting and financial work privacy.</li>
                                        <li>Enhancing the trainee’s institutional work skills and improving his personal communication.</li>
                                        <li>Building business skills in a digital transformation environment.</li>
                                    </ol>
                                </div>
                            </div>
                            <div class="accordion animated out" data-delay="0" data-animation="fadeInUp">
                                <div class="acc-btn">
                                    <div class="acc-title">The target group of training?</div>
                                    <div class="toggle-icon">
                                        <i class="plus fa fa-angle-down"></i><i class="minus fa fa-angle-up"></i>
                                    </div>
                                </div>
                                <div class="acc-content">
                                    <ul>
                                        <li>Undergraduate students</li>
                                        <li>new graduates</li>
                                        <li>Next two on the job market</li>
                                        <li>Accounting professionals – self-employment</li>
                                        <li>Accounting professionals – self-employment</li>
                                        <li>The target population is through feasibility agreements</li>
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

                    <div class="contact-form-area">
                        <div class="title"><h2>Send an Email</h2></div>
                        <div class="text"><p>We have many specialists and technicians to respond to inquiries and financial advice, be close to us and contact us, or visit us at our office.</p></div>
                        <form  action="javascript:void(0);" >
                      
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_name" value="" placeholder="Name" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="form_email" value="" placeholder="Email" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="form_Phone" value="" placeholder="Phone" required="">
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="form_Subject" value="" placeholder='Subject' required="">
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <textarea placeholder="Message" name="form_message" required="" ></textarea>
                                </div>
                            </div>
                            <button type="submit" class="btn-one style-one radi">Send Message</button>




                        </form>

                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 contact-colmun">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13604.283352256696!2d34.448998399999994!3d31.522214299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14fd7fe4d395ad91%3A0xff2a7f9c6c4b0a00!2z2KzYr9mI2Ykg2YTZhNin2LPYqti02KfYsdin2Kog2KfZhNin2YLYqti12KfYr9mK2Kkg2YjYrdmE2YjZhCDYp9mE2KPYudmF2KfZhA!5e0!3m2!1sen!2s!4v1660649242281!5m2!1sen!2s"
                         width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->
@stop
@section('script')
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI"></script>
<script src="{{ asset('assets/js/gmaps.js') }}"></script>
<script src="{{ asset('assets/js/map-helper.js') }}"></script>
@stop
