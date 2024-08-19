@extends('Admin.layouts.inc.app')
@section('title')
    استبيان تقييمات
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>
    @include('Admin.CRUDS.questions.css')
@endsection

@section('content')
    <div class="questionnaire-wrapper">
        <div class="questionnaire-header">
            <h2 class="questionnaire-title">
                استبيان تقييمات المعلمين
                <img class="icon-image" src="{{ asset('assets/AE_style/images/checklist.png') }}">
            </h2>
        </div>

        <!-- Progress Bar -->
        <div class="progress-container">
            <div class="progress-step active" id="progressStep1">1</div>
            <div class="progress-line" id="progressLine1"></div>

            <div class="progress-step" id="progressStep2">2</div>
            <div class="progress-line" id="progressLine2"></div>


            <div class="progress-step" id="progressStep3">3</div>
            <div class="progress-line" id="progressLine3"></div>

            <div class="progress-step" id="progressStep4">4</div>
        </div>

        <form id="questionnaireForm">
            <!-- Step 1: Select visitor type -->
            <div class="form-step" id="step1">
                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <h3>اختر الزائر</h3>
                        <label class="option-label">
                            <input type="radio" name="visitor_type" value="manager">
                            <div class="custom-radio"></div>
                            مدير المدرسة
                        </label>
                        <label class="option-label">
                            <input type="radio" name="visitor_type" value="representative">
                            <div class="custom-radio"></div>
                            النائب الاكاديمي
                        </label>
                        <label class="option-label">
                            <input type="radio" name="visitor_type" value="monaseq">
                            <div class="custom-radio"></div>
                            المنسق
                        </label>
                    </div>
                </div>
                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <h3>اختر القسم</h3>
                        <select name="category" class="form-control select2-category select2" data-search-link="true">
                            <option value="1">لغة عربية</option>
                            <option value="2">علوم ودراسات</option>
                            <option value="3">رياضيات</option>
                            <option value="3">لغة انجليزية</option>
                        </select>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="nextStep1">التالي <i class="fa fa-arrow-left"></i>
                    </button>
                </div>
            </div>

            <!-- Step 2: Select Teacher -->
            <div class="form-step" id="step2" style="display:none;">
                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <h3>اختر معلم من قسم <span class="category-name"></span></h3>
                        <select name="teacher" class="form-control select2-teacher select2" data-search-link="true">
                            <option value="1">استاذ شوام</option>
                            <option value="2">محمود بن نور</option>
                            <option value="3">منصور العتيبي</option>
                            <option value="3">منصور ال فهد</option>
                        </select>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="prevStep2"><i class="fa fa-arrow-right"></i> السابق
                    </button>
                    <button type="button" class="custom-btn" id="nextStep2">التالي <i class="fa fa-arrow-left"></i>
                    </button>
                </div>
            </div>

            <!-- Step 3: Saf & Shopaa -->
            <div class="form-step" id="step3" style="display:none;">

                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <h3>اختر الصف </h3>
                        <select name="teacher" class="form-control select2-saf select2" data-search-link="true">
                            <option value="1">الصف الاول</option>
                            <option value="2">الصف الثاني</option>
                            <option value="3">الصف الثالت</option>
                        </select>
                    </div>
                </div>

                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <h3>اختر الشعبة </h3>
                        <select name="teacher" class="form-control select2-shopaa select2" data-search-link="true">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>

                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="prevStep3"><i class="fa fa-arrow-right"></i> السابق
                    </button>
                    <button type="button" class="custom-btn" id="nextStep3">التالي <i class="fa fa-arrow-left"></i>
                    </button>
                </div>
            </div>

            <!-- Step 4: Questionnaire -->
            <div class="form-step" id="step4" style="display:none;">
                <div class="category">
                    <!-- Category 1: Teaching Methods -->
                    <h3 class="category-heading">طرق التدريس الفعالة</h3>

                    <!-- Question 1 category 1 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question1">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            1. ما هي أفضل طرق التدريس التي تعتقد أنها فعالة في الصف؟
                        </button>
                        {{--                    <div id="question1" class="collapse collapse-content show">--}}
                        <div id="question1" class="collapse collapse-content">
                            <label class="option-label">
                                <input type="radio" name="q1" value="التعلم التفاعلي">
                                <div class="custom-radio"></div>
                                التعلم التفاعلي
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q1" value="التعلم المستند إلى المشروع">
                                <div class="custom-radio"></div>
                                التعلم المستند إلى المشروع
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q1" value="التعلم القائم على المشكلات">
                                <div class="custom-radio"></div>
                                التعلم القائم على المشكلات
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q1" value="التعلم التقليدي">
                                <div class="custom-radio"></div>
                                التعلم التقليدي
                            </label>
                        </div>
                    </div>

                    <!-- Question 2 category 1 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question2">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            2. ما هي التحديات الرئيسية التي يواجهها الطلاب في تعلم هذه المادة؟
                        </button>
                        <div id="question2" class="collapse collapse-content">
                            <label class="option-label">
                                <input type="radio" name="q2" value="التحديات الأكاديمية">
                                <div class="custom-radio"></div>
                                التحديات الأكاديمية
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q2" value="التحديات الاجتماعية">
                                <div class="custom-radio"></div>
                                التحديات الاجتماعية
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q2" value="التحديات النفسية">
                                <div class="custom-radio"></div>
                                التحديات النفسية
                            </label>
                            <label class="option-label">
                                <input type="radio" name="q2" value="التحديات البيئية">
                                <div class="custom-radio"></div>
                                التحديات البيئية
                            </label>
                        </div>
                    </div>

                    <!-- Question 3 category 1 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question3">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            3. ما هي الاقتراحات التي تود أن تقدمها لتحسين تجربة التعلم؟
                        </button>
                        <div id="question3" class="collapse collapse-content">
            <textarea name="q3_suggestions" rows="4" class="form-control essay-textarea"
                      placeholder="أدخل اقتراحاتك هنا..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="category">
                    <!-- Category 2: School's Role -->
                    <h3 class="category-heading">دور المدرسة</h3>

                    <!-- Question 1 category 2 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question4">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            1. دور المدرسة المتوقع؟
                        </button>
                        <div id="question4" class="collapse collapse-content">
            <textarea name="q4_suggestions" rows="4" class="form-control essay-textarea"
                      placeholder="أدخل اقتراحاتك هنا..."></textarea>
                        </div>
                    </div>

                    <!-- Question 2 category 2 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question5">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            2. مساعدة المدرسة في الموارد؟
                        </button>
                        <div id="question5" class="collapse collapse-content">
            <textarea name="q5_suggestions" rows="4" class="form-control essay-textarea"
                      placeholder="أدخل اقتراحاتك هنا..."></textarea>
                        </div>
                    </div>
                </div>

                <div class="category">
                    <!-- Category 2: School's Role -->
                    <h3 class="category-heading">فعاليات الطلاب</h3>

                    <!-- Question 1 category 3 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question6">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            1. اكتب عن فعاليات الطلاب مع المدرس
                        </button>
                        <div id="question6" class="collapse collapse-content">
                            <textarea name="q4_suggestions" rows="4" class="form-control essay-textarea" placeholder="أدخل اقتراحاتك هنا..."></textarea>
                        </div>
                    </div>

                    <!-- Question 2 category 3 -->
                    <div class="questionnaire-panel">
                        <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question7">
                            <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                            2. اكتب عن دور المدرس في المشاركة مع الطلاب
                        </button>
                        <div id="question7" class="collapse collapse-content">
                        <textarea name="q5_suggestions" rows="4" class="form-control essay-textarea" placeholder="أدخل هنا..."></textarea></div>
                    </div>
                </div>


                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="prevStep3"><i class="fa fa-arrow-right"></i> السابق
                    </button>
                    <button type="submit" class="custom-btn">إرسال</button>
                </div>
            </div>


        </form>
    </div>

@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function () {

            $('.select2').select2();

            $('.category-heading').click(function () {
                $(this).closest('.category').find('.collapse').collapse('toggle');
            });

            var currentStep = 1;

            // Handle Next Button Clicks
            $('#nextStep1').click(function () {
                if (!$('input[name="visitor_type"]:checked').length) {
                    toastr.warning('يرجى تحديد الزائر اولا قبل المتابعة.');
                } else {
                    $('#step1').hide();
                    $('#step2').show();
                    $('.category-name').text($('.select2-category option:selected').text());
                    updateProgress(2);
                }
            });

            $('#nextStep2').click(function () {
                $('#step2').hide();
                $('#step3').show();
                updateProgress(3);
            });

            $('#nextStep3').click(function () {
                $('#step3').hide();
                $('#step4').show();
                updateProgress(4);
            });

            // Handle Previous Button Clicks
            $('#prevStep2').click(function () {
                $('#step2').hide();
                $('#step1').show();
                updateProgress(1);
            });

            $('#prevStep3').click(function () {
                $('#step3').hide();
                $('#step2').show();
                updateProgress(2);
            });

            // Update Progress Bar
            function updateProgress(step) {
                currentStep = step;
                $('.progress-step').removeClass('active');
                $('.progress-line').removeClass('active');

                for (var i = 1; i <= step; i++) {
                    $('#progressStep' + i).addClass('active');
                    if (i < step) {
                        $('#progressLine' + i).addClass('active');
                    }
                }
            }

            $('input[type="radio"]').change(function () {
                $(this).closest('.questionnaire-panel').find('.collapse-button').addClass('answered');
            });

            $('textarea.essay-textarea').on('input', function () {
                $(this).closest('.questionnaire-panel').find('.collapse-button').addClass('answered');
            });
        });
    </script>

@endsection
