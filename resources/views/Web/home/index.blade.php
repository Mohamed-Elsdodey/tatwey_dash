@extends('Web.layouts.inc.app')

@section('content')

    <content>
        <!-- intro -->
        <section class="mainIntro">
            <div class="inner">
                <div class="introSlider">
                    <!-- main Slider -->
                    <section class="swiperContainer">
                        <div class="swiper mainSwiper">
                            <div class="swiper-wrapper">
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{asset('web/')}}/img/background7.jpg" alt="">
                                </div>
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{asset('web/')}}/img/background3.jpg" alt="">
                                </div>
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{asset('web/')}}/img/background1.jpg" alt="">
                                </div>
                                <!-- swiper-slide -->
                                <div class="swiper-slide">
                                    <img src="{{asset('web/')}}/img/background2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="mainSwiperPagination swiper-pagination"></div>
                        <div class="mainSwiperNext swiper-button-next"></div>
                        <div class="mainSwiperPrev swiper-button-prev"></div>
                    </section>
                </div>
                <div class="introData">
                    <h4 data-aos="fade-up"> اهلا بك في<span> موقع الاندلوس التعلميي </span> </h4>
                    <h1 data-aos="fade-up">الذي تحتاجه كل مدرسة لإدارة السلوك والمواظبة والتواصل مع أولياء الأمور  </h1>
                    <p data-aos="fade-up">
                        تطبيق الاندلوس لمتابعة سلوك ابنك في المدرسة والاطلاع علي الواجبات اليومية وتقييمات ابنك من المعلمين . وارسال واستقبال الرسائل والاشعارات بينك وبين المدرسة . واستخراج تقارير عن الغياب والتأخير . متابعة الأخبار والفاعليات الخاصة بالمدرسة
                    </p>
                    <div class="btnGroup" data-aos="fade-up">
                        <a href="#values" class="btn">مميزات التطبيق</a>
                        <a href="#services" class="btn"> الخدمات التي نقدمها </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- family -->
        <section class="family">
            <div class="circleBlur"></div>
            <div class="circleBlur2"></div>
            <div class="container">
                <!-- single family -->
                <div class="single">
                    <div class="image wow fadeInUp">
                        <img src="{{asset('web/')}}/img/parent.avif">
                    </div>
                    <div class="info wow fadeInUp">
                        <h3>مع الاندلوس التعلميي </h3>
                        <h5>عائلتك اسعد ,حياتك افضل </h5>
                    </div>
                </div>
                <!-- single family -->
                <div class="single">
                    <div class="image wow fadeInUp">
                        <img src="{{asset('web/')}}/img/photo (2).jpg">
                    </div>
                    <div class="info wow fadeInUp">
                        <h3> اولادك دائما الأهم </h3>
                        <h5>الذي تحتاجه كل مدرسة لإدارة السلوك والمواظبة والتواصل مع أولياء الأمور

                        </h5>
                    </div>
                </div>
            </div>
        </section>
        <!-- values -->
        <section id="values" class="values">
            <!-- title -->
            <div class="sectionTitle">
                <h6 data-aos="fade-up"> يمتلك تطبيقنا العديد من المميزات
                    . </h6>
                <h1 data-aos="fade-up">مميزات التطبيق  </h1>
            </div>
            <div class="inner">
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/2.png" alt="">
                    <div class="info">
                        <h5> التواصل مع أولياء الأمور
                        </h5>
                        <p> ارسال واستقبال عدد لا محدود من الرسائل والاشعارات والرسائل النصية ورسائل الواتس اب إلى أولياء الأمور

                        </p>
                    </div>
                </div>
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/3.png" alt="">
                    <div class="info">
                        <h5> سهولة الوصول
                        </h5>
                        <p> سهولة الوصول الي بيانات مدرستك عن طريق الجوال أو برنامج سطح المكتب في المدرسة أو المنزل .

                        </p>
                    </div>
                </div>
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/4.png" alt="">
                    <div class="info">
                        <h5> الحماية
                        </h5>
                        <p> المتابعة والحماية للتطبيق من اي مشاكل تقنية او تعليمية

                        </p>
                    </div>
                </div>
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/5.png" alt="">
                    <div class="info">
                        <h5> التقارير و الغياب
                        </h5>
                        <p> يمكنك معرفة كل ايام الغياب والحضور لابنك في كل الاوقات .

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Vision -->
        <section class="vision">
            <div class="inner">
                <div class="info">
                    <h1  data-aos="fade-up"> <img class="icon" src="{{asset('web/')}}/img/fav.svg" alt=""> تطبيق الاندلوس لولي الأمر
                    </h1>
                    <p  data-aos="fade-up">
                        تطبيق المتابع لمتابعة سلوك ابنك في المدرسة والاطلاع علي الواجبات اليومية وتقييمات ابنك من المعلمين . وارسال واستقبال الرسائل والاشعارات بينك وبين المدرسة . واستخراج تقارير عن الغياب والتأخير . متابعة الأخبار والفاعليات الخاصة بالمدرسة . .



                    </p>

                </div>
                <div class="image"  data-aos="fade-up">
                    <img src="{{asset('web/')}}/img/bannerbegin4.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- latest -->
        <!-- values -->
        <section id="services" class="values">
            <!-- title -->
            <div class="sectionTitle">
                <h6 data-aos="fade-up"> يمتلك تطبيقنا العديد من المميزات
                    . </h6>
                <h1 data-aos="fade-up">الخدمات التي نقدمها
                </h1>
            </div>
            <div class="inner">
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/6.png" alt="" style="height: 100px;">
                    <div class="info">
                        <h4 style="color: #1e1341;"> تطبيق خاص لإدارة المدرسة والمعلمين

                        </h4>
                    </div>
                </div>

                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/7.png" alt=""  style="height: 100px;">
                    <div class="info">
                        <h4  style="color: #1e1341;"> برنامج مكتبي لإدارة المدرسة وطباعة التقارير والمتابعة

                        </h4>

                    </div>
                </div>
                <!--value  -->
                <div class="value">
                    <img src="{{asset('web/')}}/img/8.png" alt=""  style="height: 100px;">
                    <div class="info">
                        <h4  style="color: #1e1341;">تطبيق خاص لأولياء الأمور لمتابعة الطالب في أي وقت وتلقي الاشعارات
                            التقارير و الغياب
                        </h4>

                    </div>
                </div>
            </div>
        </section>





    </content>



@endsection
