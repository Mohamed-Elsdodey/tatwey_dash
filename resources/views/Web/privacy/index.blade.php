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
                    <h1> الشروط و الاحكام </h1>
                    <div class="links">
                        <a href="index.html">
                            الرئيسية
                        </a>
                        <a href="#!">
                            تعرف معنا
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="col">
                <!-- Swiper -->
                <div class="swiper topSlider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img data-atropos-offset="2" src="{{asset('web/')}}/img/high.jpg">
                        </div>
                        <div class="swiper-slide">

                            <img data-atropos-offset="2" src="{{asset('web/')}}/img/high3.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img data-atropos-offset="2" src="{{asset('web/')}}/img/high1.jpg">
                        </div>
                        <div class="swiper-slide">
                            <img data-atropos-offset="2" src="{{asset('web/')}}/img/girl3.jpg">
                        </div>

                    </div>
                </div>

            </div>
            <div class="col">
                <!-- title -->
                <div class="title">

                    <span class="distance"></span>
                    <div class="side">
                        <h1 data-aos="fade-up"> سياسية الخصوصية </h1>
                    </div>
                </div>
                <p class="moreInfo" data-aos="fade-up" data-aos-delay="100" >
                    سياسة الخصوصية

                    نحن نأخذ الخصوصية على محمل الجد. يرجى قراءة سياستنا أدناه وإعلامنا إذا كان لديك أي أسئلة أو تعليقات.

                    ماذا تغطي سياسة الخصوصية هذه؟

                    تتعلق سياسة الخصوصية هذه بالتطبيقات التالية. : جميع تطبيقاتنا وويندوزنا وموقعنا الإلكتروني.

                    معلومات شخصية

                    نحن لا نجمع أي معلومات شخصية عن مستخدمي تطبيقاتنا. تحتاج بعض التطبيقات إلى معلومات المستخدم فقط للتسجيل.

                    نحن لا نتواصل عن قصد أو نجمع معلومات شخصية من الأطفال دون سن 13 عامًا.

                    إذا كنت تعتقد أننا جمعنا هذه المعلومات عن غير قصد ،

                    يرجى الاتصال بنا حتى نتمكن من إزالة المعلومات على الفور.

                    نقوم بجمع معلومات الاستخدام مجهولة المصدر لمساعدتنا على تحسين خدماتنا وتطبيقاتنا.

                    الروابط داخل التطبيقات

                    تحتوي بعض التطبيقات على روابط خارجية مثل موقعنا على الويب ، ومتجر Play الذي اشتريته منه ،

                    أو إلى ملفات تعريف الوسائط الاجتماعية الخاصة بنا للسماح لك بمعرفة المزيد عن شركتنا ومنتجاتنا وخدماتنا.

                    مقدمي الخدمة

                    يجوز لي توظيف شركات وأفراد تابعين لجهات خارجية للأسباب التالية:

                    لتسهيل خدمتنا ؛

                    لتقديم الخدمة نيابة عنا ؛

                    لأداء الخدمات المتعلقة بالخدمة ؛ أو

                    لمساعدتنا في تحليل كيفية استخدام خدمتنا.

                    أريد إبلاغ مستخدمي هذه الخدمة أن هذه الأطراف الثالثة لديها حق الوصول إلى معلوماتك الشخصية. والسبب هو أداء المهام الموكلة إليهم نيابة عنا. ومع ذلك ، فهم ملزمون بعدم الكشف عن المعلومات أو استخدامها لأي غرض آخر.

                    عمليات الشراء داخل التطبيق

                    تحتوي بعض تطبيقاتنا على مشتريات داخل التطبيق. هذه العناصر ذات تكلفة واحدة وليست متكررة شهريًا / سنويًا.

                    دعاية

                    لا تحتوي تطبيقاتنا التي تحتوي على شراء داخل التطبيق أو إصدار PRO على أي إعلانات لجزء ثالث!

                    قد تحتوي تطبيقاتنا المجانية التي تحتوي على جميع الأسئلة مجانًا على إعلانات.

                    يجوز لنا من وقت لآخر الترويج لتطبيقات أخرى للشركة داخل تطبيقاتنا.

                    عند القيام بذلك باستخدام الروابط ، نحاول ضمان الحماية ضد نقر الأطفال على هذه الروابط عن طريق وضعها في قسم الوالدين أو طلب حجز لمدة 3 ثوانٍ.

                    أسئلة الخصوصية

                    إذا كانت لديك أي أسئلة حول تطبيقاتنا أو سياسة الخصوصية الخاصة بنا ، فيرجى الاتصال بنا على: support@funoontech.net

                    التغييرات

                    نحتفظ بالحق ، في أي وقت ، في الإضافة إلى هذه السياسة أو تغييرها أو تحديثها أو تعديلها ، ببساطة عن طريق نشر هذا التغيير ،

                    التحديث أو التعديل على الموقع وبدون أي إشعار آخر لك.

                    أي تغيير أو تحديث أو تعديل سيكون ساري المفعول فور نشره على الموقع.

                    تقع على عاتقك مسؤولية مراجعة هذه السياسة من وقت لآخر لضمان استمرار موافقتك على جميع شروطها.
                </p>

            </div>

        </section>

    </content>


@endsection
