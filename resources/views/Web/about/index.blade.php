@extends('Web.layouts.inc.app')

@section('content')

    <content>
        <!-- banner -->
        <section class="banner">
            <div class="routeNav">
                <button onclick="history.back()" class="Back">
                    <img src="{{asset('web/')}}/img/icons/arrow.svg" alt="">
                </button>
                <div class="navigetor">
                    <h1> تعرف علينا </h1>
                    <div class="links">
                        <a href="index.html">
                            الرئيسية
                        </a>
                        <a href="#!">
                            من نحن
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- about -->

        <section id="about" class="about">
            <div class="col">
                <!-- Swiper -->
                <div class="swiper topSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-atropos-offset="4" src="{{asset('web/')}}/img/girl2.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img data-atropos-offset="4" src="{{asset('web/')}}/img/background2.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img data-atropos-offset="4" src="{{asset('web/')}}/img/background7.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img data-atropos-offset="4" src="{{asset('web/')}}/img/background_photo1.jpg">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col">
                <!-- title -->
                <div class="title">
                    <div class="side">
                        <p data-aos="fade-up"> خبراتنا تمتد لسنوات طويلة نستعرض لك بعض من تاريخنا الملهم . </p>
                    </div>
                    <span class="distance"></span>
                    <div class="side">
                        <h6 data-aos="fade-up"> من نحن </h6>
                        <h1 data-aos="fade-up"> تعرف علينا عن كثب </h1>
                    </div>
                </div>
                <p class="moreInfo" data-aos="fade-up" data-aos-delay="100">
                    تطبيق الاندلوس لولي الأمر المتابع لولي الامر التطبيق الأفضل الذي يوفر المزيد من الطمأنينة لولي الامر لمتابعة سلوك ابنك في المدرسة والاطلاع على الواجبات اليومية وتقييمات ابنك من المعلمين. وارسال واستقبال الرسائل والاشعارات بينك وبين المدرسة واستخراج تقارير عن الغياب والتأخير، ومتابعة كل الأخبار والفاعليات الخاصة بالمدرسة. مميزات تطبيق الاندلوس المدرسي - المتابعة لحظة بلحظة وفي أي وقت لكل ما يخص ابنك داخل المدرسة وتسهيل التواصل مع الإطار التربوي من إدارة ومدرسين في أي وقت - يتوفر تطبيق الاندلوس لولي الامر كل النسخ للهواتف الذكية - التواصل المستمر مع معلمي الطالب - الاطلاع على الجدول المدرسي. - متابعة الاشعارات والفعاليات - يحرص تطبيق الاندلوس علي  تسهيل الاطلاع على مستوى التحصيل الدراسي، الانضباط . كيفية استخدام تطق الاندلوس لولي الأمر أولا تنزيل تطبيق المتابع على جوالك يجب عليك انشاء حساب خاص بك للاستعلام على الطالب. بعد ذلك يمكنك اتباعك الخطوات التالية إدخال البريد الالكتروني وكلمة السر الخاصة بك ومن هنا ستظهر لك على شاشتك بيانات الطالب الخاصة به ومن بين هذه المعلومات التي سيتم إرسالها إلى أولياء الأمور نجد: اسم الطالب و صفه و الترتيب علي المدرسة و الترتيب علي الصف و الترتيب علي الفصل  و ستكون هذه البيانات الخاصة المتاحة لأولياء الأمور هامة وسرية للغاية لذلك وجب التأكد من عنوان البريد الإلكتروني ورقم السري  عند إنشاء الحساب محتويات تطبيق الاندلوس لولي الأمر: عند فتح تطبيق المتابع لولي الأمر يمكنك الاستعلام على العديد من الأشياء: الغياب: متابعة كل ما يخص غياب الطالب عن المدرسة  : يمكن متابعة الرسائل العامة التي تضيفها المدرسة والمعلمين لكل ما يخص الطالب الأخبار والفعاليات: متابعة الأخبار والفاعليات الخاصة بالمدرسة
                </p>

            </div>
        </section>

    </content>
@endsection
