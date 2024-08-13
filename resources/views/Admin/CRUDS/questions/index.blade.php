@extends('Admin.layouts.inc.app')
@section('title')
    استبيان تقييمات
@endsection

@section('css')
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
        </div>

        <form id="questionnaireForm">
            <!-- Step 1: Select School -->
            <div class="form-step" id="step1">
                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <label class="option-label">
                            <input type="radio" name="school" value="School A">
                            <div class="custom-radio"></div>
                            مدرسة النهضة
                        </label>
                        <label class="option-label">
                            <input type="radio" name="school" value="School B">
                            <div class="custom-radio"></div>
                            مدرسة الامل
                        </label>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="nextStep1">التالي <i class="fa fa-arrow-left"></i> </button>
                </div>
            </div>

            <!-- Step 2: Select Teacher -->
            <div class="form-step" id="step2" style="display:none;">
                <div class="questionnaire-panel">
                    <div class="collapse-content">
                        <label class="option-label">
                            <input type="radio" name="teacher" value="Teacher A">
                            <div class="custom-radio"></div>
                            المعلم أ
                        </label>
                        <label class="option-label">
                            <input type="radio" name="teacher" value="Teacher B">
                            <div class="custom-radio"></div>
                            المعلم ب
                        </label>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="prevStep2"><i class="fa fa-arrow-right"></i> السابق  </button>
                    <button type="button" class="custom-btn" id="nextStep2">التالي <i class="fa fa-arrow-left"></i> </button>
                </div>
            </div>

            <!-- Step 3: Questionnaire -->
            <div class="form-step" id="step3" style="display:none;">
                <!-- Question 1 -->
                <div class="questionnaire-panel">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question1">
                        <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                        1. ما هي أفضل طرق التدريس التي تعتقد أنها فعالة في الصف؟
                    </button>
                    <div id="question1" class="collapse collapse-content show">
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

                <!-- Question 2 -->
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

                <!-- Question 3 -->
                <div class="questionnaire-panel">
                    <button class="collapse-button" type="button" data-toggle="collapse" data-target="#question3">
                        <img class="icon-image opacity" src="{{ asset('assets/AE_style/images/title.svg') }}">
                        3. ما هي الاقتراحات التي تود أن تقدمها لتحسين تجربة التعلم؟
                    </button>
                    <div id="question3" class="collapse collapse-content">
                        <textarea name="q3_suggestions"  rows="4" class="form-control essay-textarea"
                                  placeholder="أدخل اقتراحاتك هنا..."></textarea>
                    </div>
                </div>

                <div class="form-buttons">
                    <button type="button" class="custom-btn" id="prevStep3"><i class="fa fa-arrow-right"></i>  السابق </button>
                    <button type="submit" class="custom-btn">إرسال</button>
                </div>
            </div>
        </form>
    </div>

@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            var currentStep = 1;

            // Handle Next Button Clicks
            $('#nextStep1').click(function () {
                if (!$('input[name="school"]:checked').length) {
                    toastr.warning('يرجى اختيار المدرسة اولا قبل المتابعة.');
                }
                else{
                    $('#step1').hide();
                    $('#step2').show();
                    updateProgress(2);
                }
            });

            $('#nextStep2').click(function () {
                if (!$('input[name="teacher"]:checked').length) {
                    toastr.warning('يرجى اختيار المدرس اولا قبل المتابعة.');
                }
                else{
                    $('#step2').hide();
                    $('#step3').show();
                    updateProgress(3);
                }
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

            $('input[type="radio"]').change(function() {
                $(this).closest('.questionnaire-panel').find('.collapse-button').addClass('answered');
            });

            $('textarea.essay-textarea').on('input', function() {
                $(this).closest('.questionnaire-panel').find('.collapse-button').addClass('answered');
            });
        });
    </script>

@endsection
