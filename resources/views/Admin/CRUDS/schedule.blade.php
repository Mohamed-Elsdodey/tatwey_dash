@extends('Admin.layouts.inc.app')
@section('title')
    الجدول الدراسي
@endsection
@section('css')
    <style>
        :root {
            --porcelain: #ECEFF1;
        }

        .timetable {
            display: grid;
            grid-template-areas: ". week" "time content";
            grid-template-columns: 10%;
            grid-template-rows: 60px;
            width: 100%;
            height: 100vh;
        }

        .week-names {
            grid-area: week;
            display: grid;
            border-right: 1px solid var(--porcelain);
            /* بدل 5 هنا حط عدد ايام العمل يا سدودو وطبعا متجربهاش من غير ما تعدل في ال HTML */
            grid-template-columns: repeat(5, 1fr);
            text-transform: uppercase;
            font-size: 14px;
            font-weight: bold;
        }

        .week-names > div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 1px 0 0 rgba(57, 70, 95, 0.15);
        }

        .time-interval {
            grid-area: time;
            display: grid;
            /* بدل 8 هنا حط عدد الحصص يا سدودو */
            grid-template-rows: repeat(8, 1fr);
            font-size: 14px;
        }

        .time-interval > div {
            display: flex;
            font-weight: bold;
            border-left: 1px solid var(--porcelain);
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 0 1px 0 0 var(--porcelain);
        }

        .content {
            grid-area: content;
            display: grid;
            border-bottom: 1px solid var(--porcelain);
            /* بدل 8 هنا حط عدد الحصص يا سدودو وطبعا متجربهاش من غير ما تعدل في ال HTML */
            grid-template-rows: repeat(8, 1fr);
            /* بدل 5 هنا حط عدد ايام العمل يا سدودو وطبعا متجربهاش من غير ما تعدل في ال HTML */
            grid-template-columns: repeat(5, 1fr);
        }

        .content > div {
            display: flex;
            align-items: center;
            position: relative;
            box-shadow: inset 1px 0 0 var(--porcelain), inset 0 1px 0 0 var(--porcelain);
        }

        .content > .session {

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
    </style>

@endsection
@section('content')
    <div class="card AE_card">
        <div class="card-header d-flex align-items-center">
            <h5 class="card-title mb-0 flex-grow-1  AE_title">الجدول الدراسي</h5>



        </div>
        <div class="card-body">
            <div class="timetable">
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
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>خالد</option>
                            <option>محمود</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الاثنين -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حسن</option>
                            <option>عبدالله</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم التلات -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>صالح</option>
                            <option>فهد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الاربع -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>راشد</option>
                            <option>حمد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <!-- وده الحصة الاولي ليوم الخميس -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>ياسر</option>
                            <option>نواف</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة التانية لعدد 5 ايام -->
                    <!-- الحصة 2 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>بدر</option>
                            <option>راشد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>سعيد</option>
                            <option>سلمان</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حمد</option>
                            <option>عبدالعزيز</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>صالح</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حسن</option>
                            <option>عبدالله</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة التالتة لعدد 5 ايام -->
                    <!-- الحصة 3 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>خالد</option>
                            <option>بدر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>حمد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالعزيز</option>
                            <option>فهد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حسن</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>سلمان</option>
                            <option>راشد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!--  الحصة الرابعة لعدد 5 ايام -->
                    <!-- الحصة 4 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>خالد</option>
                            <option>حمد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>علي</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>فهد</option>
                            <option>راشد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>سلمان</option>
                            <option>حمد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالله</option>
                            <option>ياسر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 5 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>سلمان</option>
                            <option>بدر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>فهد</option>
                            <option>ياسر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالعزيز</option>
                            <option>خالد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>راشد</option>
                            <option>حسن</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 6 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حسن</option>
                            <option>محمود</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالعزيز</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>ياسر</option>
                            <option>فهد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>راشد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالله</option>
                            <option>خالد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 7 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>سلمان</option>
                            <option>بدر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>فهد</option>
                            <option>ياسر</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالعزيز</option>
                            <option>خالد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>راشد</option>
                            <option>حسن</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>

                    <!-- الحصة 8 -->
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>حسن</option>
                            <option>محمود</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالعزيز</option>
                            <option>سعيد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>ياسر</option>
                            <option>فهد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>محمود</option>
                            <option>راشد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                    <div class="session">
                        <select>
                            <option>لم يتم تحديد المدرس</option>
                            <option>عبدالله</option>
                            <option>خالد</option>
                        </select>
                        <i class="fas fa-trash" onclick="clearSelect(this)"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')
    <script>
        function clearSelect(icon) {
            const select = icon.previousElementSibling;
            select.selectedIndex = 0;
        }
    </script>
@endsection
