@extends('Admin.layouts.inc.app')
@section('title')
    الجدول الدراسي
@endsection
@section('css')
    {{--    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>--}}
    <style>
        :root {
            --porcelain: #ECEFF1;
        }

        .timetable {
            display: grid;
            /* بدلت أماكن time و week عشان الأيام تبقى عمودية والحصص أفقية */
            grid-template-areas: ". time" "week content";
            grid-template-columns: 10%;
            grid-template-rows: 60px;
            width: 100%;
            height: 100vh;
            border-right: 1px solid #d3d3d3;
        }

        .week-names {
            grid-area: week;
            display: grid;
            /* الأيام هنا تبقى عمودية بدل أفقية */
            grid-template-rows: repeat(5, 1fr); /* بدل 5 هنا حط عدد أيام العمل يا سدودو */
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
        }

        .week-names > div {
            display: flex;
            border-top: 1px solid #d3d3d3;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 1px 0 0 rgba(57, 70, 95, 0.15);
        }

        .time-interval {
            grid-area: time;
            display: grid;
            /* بدل 5 هنا خلى الحصص أفقية */
            grid-template-columns: repeat(8, 1fr); /* خلت الحصص تمشي أفقيا */
            font-size: 14px;
        }

        .time-interval > div {
            border-right: 1px solid #d3d3d3;
            display: flex;
            font-weight: bold;
            border-bottom: 1px solid var(--porcelain);
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 0 1px 0 0 var(--porcelain);
        }

        .content {
            grid-area: content;
            display: grid;
            border-left: 1px solid var(--porcelain);
            /* بدل 5 هنا خلى الحصص أفقية */
            grid-template-columns: repeat(8, 1fr); /* الحصص تمشي أفقيا */
            /* بدل 5 هنا خلى الأيام عمودية */
            grid-template-rows: repeat(5, 1fr); /* الأيام تمشي عموديا */
        }

        .content > div {
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: inset 1px 0 0 var(--porcelain), inset 0 1px 0 0 var(--porcelain);
        }

        .content > div.session.has-teacher {
            background-color: #DFF0D8; /* Light green background for sessions with a teacher */
        }

        .content > div.session.animation-creative {
            animation: pulse 1s infinite; /* Pulsing animation for creative sessions */
        }

        @keyframes pulse {
            0% {
                background-color: #FFF9C4; /* Very light yellow */
            }
            50% {
                background-color: #EFEF8D; /* Light yellowish-green */
            }
            100% {
                background-color: #FFF9C4; /* Very light yellow */
            }
        }

        .content > div select {
            width: 80%;
            height: 100%;
            font-size: 14px;
            border: none;
            background: transparent;
            color: #39465F;
        }

        .content > div select:focus {
            outline: none;
        }

        .content > div i {
            width: 20%;
            text-align: center;
            color: #FF6F61; /* Color for trash icon */
            cursor: pointer;
        }

        .content > div i:hover {
            color: #C62828; /* Darker red on hover */
        }

        .select2-selection {
            height: 39px !important;
        }

        .content > div.session.has-teacher .select2-container--default .select2-selection--single {
            background-color: #DFF0D8;
            border: 0px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #e0e0e0 !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            padding-top: 8px !important;
            padding-right: 20px !important;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #84C785 !important;
        }
    </style>

@endsection
@section('content')
    <div class="card AE_card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1  AE_title">الجدول الدراسي</h5>


        </div>
        <div class="card-body">
            <div class="row mb-3">
                <div class="col-8">
                    <h3>اختر الصف</h3>
                    <select name="category" class="form-control select2-category select2" data-search-link="true">
                        <option value="1">الاول</option>
                        <option value="2">الثاني</option>
                        <option value="3">الثالث</option>
                        <option value="3">الرابع</option>
                    </select>
                    <br>
                    <h3>اختر الفصل</h3>
                    <select name="category" class="form-control select2-category select2" data-search-link="true">
                        <option value="1">فصل 1</option>
                        <option value="2">فصل 2</option>
                        <option value="3">فصل 3</option>
                    </select>
                    <button class="btn btn-success mt-3" id="showTable">عرض الجدول</button>
                </div>
                <div class="col-4 text-center">
                    <img src="{{asset('assets\AE_style\images\c-1.png')}}">
                </div>
            </div>

            <div class="timetable d-none" id="timetable">
                <div class="week-names">
                    <div>الأحد</div>
                    <div>الاثنين</div>
                    <div>الثلاثاء</div>
                    <div>الأربعاء</div>
                    <div>الخميس</div>

                </div>
                <div class="time-interval">
                    <div>الحصة الأولى</div>
                    <div>الحصة الثانية</div>
                    <div>الحصة الثالثة</div>
                    <div>الحصة الرابعة</div>
                    <div>الحصة الخامسة</div>
                    <div>الحصة السادسة</div>
                    <div>الحصة السابعة</div>
                    <div>الحصة الثامنة</div>
                </div>
                <div class="content">
                    <!-- هنا يا سدودي بنعرض الحصص لكل الايام :::: بمعني ان اول مقطع ده بيمثل الحصة الاولي لعدد 5 ايام  -->

                    <!-- الحصة 1 -->
                    <!-- ده مثلا الحصة الاولي ليوم الاحد -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة عربية</option>
                            <option>مادة لغة رياضة</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الاثنين -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>تاريخ</option>
                            <option>دراسات</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم التلات -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>رسم</option>
                            <option>علم النفس</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الاربع -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علوم</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الخميس -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>احياء</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة التانية لعدد 5 ايام -->
                    <!-- الحصة 2 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة عربية</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة عربية</option>
                            <option>لغة انجليزية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>احياء</option>
                            <option>لغة انجليزية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>رسم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>تاريخ</option>
                            <option>دراسات</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة التالتة لعدد 5 ايام -->
                    <!-- الحصة 3 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة عربية</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>علم النفس</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>تاريخ</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة الرابعة لعدد 5 ايام -->
                    <!-- الحصة 4 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة عربية</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علي</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علم النفس</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>دراسات</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 5 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علم النفس</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>مادة لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علوم</option>
                            <option>تاريخ</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 6 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>تاريخ</option>
                            <option>مادة لغة رياضة</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>احياء</option>
                            <option>علم النفس</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>دراسات</option>
                            <option>مادة لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 7 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علم النفس</option>
                            <option>احياء</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>مادة لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>علوم</option>
                            <option>تاريخ</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 8 -->
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>تاريخ</option>
                            <option>مادة لغة رياضة</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>لغة انجليزية</option>
                            <option>لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>احياء</option>
                            <option>علم النفس</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>مادة لغة رياضة</option>
                            <option>علوم</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select onchange="markSession(this)" class="">
                            <option value="">لم يتم تحديد المادة</option>
                            <option>دراسات</option>
                            <option>مادة لغة عربية</option>
                        </select>
                        <i class="fa fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

    <script>
        function clearSelect(icon) {
            const select = icon.previousElementSibling;
            const sessionDiv = select.parentElement;

            if (select.selectedIndex !== 0) {
                select.selectedIndex = 0;
                sessionDiv.classList.remove('has-teacher');
                sessionDiv.classList.add('animation-creative');
            } else {
                toastr.warning('يرجى تحديد حصة اولا');
            }
        }

        function markSession(select) {
            const sessionDiv = select.parentElement;
            const selectedValue = select.value;

            // Remove any previous classes
            sessionDiv.classList.remove('has-teacher', 'animation-creative');

            // Check if the selected value indicates a teacher or animation creative
            if (selectedValue !== "") {
                sessionDiv.classList.add('has-teacher');
            } else {
                sessionDiv.classList.add('animation-creative');
            }
        }

        $('#showTable').click(function () {
            $('#timetable').removeClass('d-none');
        });
        // $(document).ready(function () {
        //     $('.select2').select2();
        // });
    </script>
@endsection
