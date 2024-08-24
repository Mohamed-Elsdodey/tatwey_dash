@extends('Admin.layouts.inc.app')
@section('title')
    تقرير المدرس
@endsection

@section('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet"/>

    <style>
        .select2-selection {
            height: 39px !important;
        }

        .select2-container--default .select2-selection--single {
            border: 1px solid #e0e0e0 !important;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            padding-top: 10px !important;
            padding-right: 20px !important;
        }

        .select2-container--default .select2-results__option--highlighted[aria-selected] {
            background-color: #84C785 !important;
        }

        .progress-label .progress-bar .label {
            font-size: 14px;
        }

        .mb-15 {
            margin-bottom: 30px;
        }

        .icon-header {
            margin-left: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-3 col-6 mb-4">
                    <h3>اختر المادة </h3>
                    <select name="teacher" class="form-control select2-subject select2" data-search-link="true">
                        <option value="1">لغة عربية</option>
                        <option value="2">دراسات</option>
                    </select>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3>اختر المدرس </h3>
                    <select name="teacher" class="form-control select2-teacher select2" data-search-link="true">
                        <option value="1">استاذ شوام</option>
                        <option value="2">محمود العتيبي</option>
                        <option value="3">رضا الفاروق</option>
                    </select>
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3>من تاريخ </h3>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-3 col-6 mb-4">
                    <h3>الي تاريخ </h3>
                    <input type="date" class="form-control">
                </div>
                <div class="text-center">
                    <button class="btn btn-success mt-2" id="searchBtn">عرض التقرير</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card-body d-none" id="reportSection">
            <div class="row">
                <div class="col-xxl-2">

                    <div class="card mt-n5">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <div class="profile-user d-inline-block mx-auto  mb-4">
                                    <img
                                        src="https://static3.tgstat.ru/channels/_0/19/1944c3aa6556cb2e1bf4d0662858b685.jpg"
                                        class="rounded-circle avatar-xl img-thumbnail user-profile-image"
                                        alt="user-profile-image">
                                </div>
                                <h5 class="fs-16 mb-1">استاذ رضا الفاروق</h5>
                                <p class="text-muted mb-0">مدرس اول لغة عربية</p>
                            </div>
                        </div>
                    </div>

                    <!--end card-->
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-15">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">النسية المئوية للمدرسة</h5>
                                </div>
                            </div>
                            <div class="progress animated-progress custom-progress progress-label">
                                {{--                                كلاس اللي اسمه success ده بيتغير يا سدودو حسب النسبة بتاعته--}}
                                <div class="progress-bar bg-success" role="progressbar" style="width: 85.3%"
                                     aria-valuenow="85.3" aria-valuemin="0" aria-valuemax="100">
                                    <div class="label">85.3%</div>
                                </div>
                            </div>

                            <div class="d-flex align-items-center mb-15 mt-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">النسية المئوية للمادة</h5>
                                </div>
                            </div>
                            <div class="progress animated-progress custom-progress progress-label">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%"
                                     aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                    <div class="label">70%</div>
                                </div>
                            </div>


                            <div class="d-flex align-items-center mb-15 mt-4">
                                <div class="flex-grow-1">
                                    <h5 class="card-title mb-0">النسية المئوية للمعلم</h5>
                                </div>
                            </div>
                            <div class="progress animated-progress custom-progress progress-label">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 52.9%"
                                     aria-valuenow="52.9" aria-valuemin="0" aria-valuemax="100">
                                    <div class="label">52.9%</div>
                                </div>
                            </div>

                            <div class="row g-0 text-center mt-4">
                                <div class="col-12">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value fs-4" data-target="344">0</span>
                                        </h5>
                                        <p class="text-muted mb-0 fs-5">عدد الزيارات للمدرسة</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12">
                                    <div class="p-3 border border-dashed border-start-0">
                                        <h5 class="mb-1"><span class="counter-value fs-4" data-target="42">0</span></h5>
                                        <p class="text-muted mb-0 fs-5">عدد الزيارات للمادة</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-12">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1"><span class="counter-value fs-4" data-target="20">0</span></h5>
                                        <p class="text-muted mb-0 fs-5">عدد الزيارات للمعلم</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6">
                                    <div class="p-3 border border-dashed border-start-0 border-end-0">
                                        <h5 class="mb-1"><span class="counter-value fs-4" data-target="6">0</span></h5>
                                        <p class="text-muted mb-0 fs-5">ترتيب المعلم</p>
                                    </div>
                                </div>
                                <!--end col-->
                                <div class="col-6">
                                    <div class="p-3 border border-dashed border-start-1 border-end-0">
                                        <h5 class="mb-1"><span class="counter-value fs-4" data-target="4">0</span></h5>
                                        <p class="text-muted mb-0 fs-5">ترتيب المادة</p>
                                    </div>
                                </div>
                                <!--end col-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
                <div class="col-xxl-10">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab"
                                       aria-selected="true">
                                        <i class="fas fa-home icon-header"></i> لمحة عامة
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rateDetails" role="tab"
                                       aria-selected="true">
                                        <i class="fas fa-info icon-header"></i> تفاصيل التقييمات
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="show-rate-statics" data-bs-toggle="tab" href="#rate_statics"
                                       role="tab"
                                       aria-selected="false" tabindex="-1">
                                        <i class="fa fa-line-chart icon-header"></i> مخطط التقييمات
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-2">
                            <div class="tab-content">
                                <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                    <div class="row mb-3">
                                        {{--                                        <div class="col col-lg border-end">--}}
                                        {{--                                            <div class="py-4 px-3">--}}
                                        {{--                                                <h5 class="text-muted text-uppercase fs-5">ايام الغياب--}}
                                        {{--                                                    <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>--}}
                                        {{--                                                </h5>--}}
                                        {{--                                                <div class="d-flex align-items-center">--}}
                                        {{--                                                    <div class="flex-grow-1 ms-3">--}}
                                        {{--                                                        <h2 class="mb-0"><span>6</span></h2>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="col col-lg border-end">--}}
                                        {{--                                            <div class="py-4 px-3">--}}
                                        {{--                                                <h5 class="text-muted text-uppercase fs-5">ايام التاخير--}}
                                        {{--                                                    <i class="ri-arrow-up-circle-line text-success fs-18 float-end align-middle"></i>--}}
                                        {{--                                                </h5>--}}
                                        {{--                                                <div class="d-flex align-items-center">--}}
                                        {{--                                                    <div class="flex-grow-1 ms-3">--}}
                                        {{--                                                        <h2 class="mb-0"><span>4</span></h2>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        <div class="col col-lg border-end">
                                            <div class="py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-5"> مقارنة المادة بالمدرسة
                                                    <i class="ri-arrow-right-up-fill text-success fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-shrink-0">
                                                        <i class="fa fa-arrow-up-right display-6 text-muted"></i>
                                                    </div>
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0 text-success"><span>2.1% +</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-lg border-end">
                                            <div class="py-4 px-3">
                                                <h5 class="text-muted text-uppercase fs-5"> مقارنة المعلم بالمادة
                                                    <i class="ri-arrow-left-down-fill text-danger fs-18 float-end align-middle"></i>
                                                </h5>
                                                <div class="d-flex align-items-center">
                                                    <div class="flex-grow-1 ms-3">
                                                        <h2 class="mb-0 text-danger"><span>0.7% -</span></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <h4 class="mb-3"> تقييمات المعايير</h4>
                                        <table class="table text-center text-dark">
                                            <thead>
                                            <tr>
                                                <th scope="col">المعيار</th>
                                                <th scope="col">تقييم المعلم</th>
                                                <th scope="col">تقييم المادة</th>
                                                <th scope="col">تقييم المدرسة</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>1</th>
                                                <th class="text-success">86.6%</th>
                                                <th class="text-warning">90%</th>
                                                <th class="text-danger">75.7%</th>
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <th class="text-success">78.3%</th>
                                                <th class="text-warning">85.4%</th>
                                                <th class="text-danger">70.2%</th>
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <th class="text-success">92.1%</th>
                                                <th class="text-warning">87.6%</th>
                                                <th class="text-danger">81.3%</th>
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <th class="text-danger">68.5%</th>
                                                <th class="text-warning">77.2%</th>
                                                <th class="text-danger">65.9%</th>
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <th class="text-success">81.7%</th>
                                                <th class="text-warning">79.8%</th>
                                                <th class="text-danger">72.4%</th>
                                            </tr>
                                            <tr>
                                                <th>6</th>
                                                <th class="text-success">87.9%</th>
                                                <th class="text-warning">91.3%</th>
                                                <th class="text-danger">74.8%</th>
                                            </tr>
                                            <tr>
                                                <th>7</th>
                                                <th class="text-success">83.4%</th>
                                                <th class="text-warning">88.9%</th>
                                                <th class="text-danger">76.1%</th>
                                            </tr>
                                            <tr>
                                                <th>8</th>
                                                <th class="text-danger">69.8%</th>
                                                <th class="text-warning">74.5%</th>
                                                <th class="text-danger">63.7%</th>
                                            </tr>
                                            <tr>
                                                <th>9</th>
                                                <th class="text-success">90.2%</th>
                                                <th class="text-warning">92.7%</th>
                                                <th class="text-danger">80.4%</th>
                                            </tr>
                                            <tr>
                                                <th>10</th>
                                                <th class="text-danger">75.5%</th>
                                                <th class="text-warning">83.1%</th>
                                                <th class="text-danger">69.0%</th>
                                            </tr>
                                            <tr>
                                                <th>11</th>
                                                <th class="text-danger">88.8%</th>
                                                <th class="text-warning">89.3%</th>
                                                <th class="text-success">78.9%</th>
                                            </tr>
                                            <tr>
                                                <th>12</th>
                                                <th class="text-danger">72.9%</th>
                                                <th class="text-warning">81.6%</th>
                                                <th class="text-danger">67.4%</th>
                                            </tr>
                                            <tr>
                                                <th>13</th>
                                                <th class="text-success">85.6%</th>
                                                <th class="text-warning">90.5%</th>
                                                <th class="text-danger">74.2%</th>
                                            </tr>
                                            <tr>
                                                <th>14</th>
                                                <th class="text-danger">80.1%</th>
                                                <th class="text-warning">86.7%</th>
                                                <th class="text-success">71.3%</th>
                                            </tr>
                                            <tr>
                                                <th>15</th>
                                                <th class="text-success">93.4%</th>
                                                <th class="text-warning">94.8%</th>
                                                <th class="text-danger">82.5%</th>
                                            </tr>
                                            <tr>
                                                <th>16</th>
                                                <th class="text-danger">74.7%</th>
                                                <th class="text-warning">78.6%</th>
                                                <th class="text-danger">68.1%</th>
                                            </tr>
                                            <tr>
                                                <th>17</th>
                                                <th class="text-success">89.5%</th>
                                                <th class="text-warning">91.9%</th>
                                                <th class="text-danger">77.8%</th>
                                            </tr>
                                            <tr>
                                                <th>18</th>
                                                <th class="text-danger">70.3%</th>
                                                <th class="text-warning">75.1%</th>
                                                <th class="text-success">65.6%</th>
                                            </tr>
                                            <tr>
                                                <th>19</th>
                                                <th class="text-success">84.2%</th>
                                                <th class="text-warning">87.5%</th>
                                                <th class="text-danger">73.9%</th>
                                            </tr>
                                            <tr>
                                                <th>20</th>
                                                <th class="text-danger">77.8%</th>
                                                <th class="text-warning">82.3%</th>
                                                <th class="text-success">70.8%</th>
                                            </tr>
                                            <tr class="table-success">
                                                <th>المتوسط</th>
                                                <th class="text-success" colspan="3">88.5%</th>
                                            </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--end tab-pane-->
                                <div class="tab-pane" id="rateDetails" role="tabpanel">
                                    <div class="row">
                                        <h4 class="mb-3 p-4"> تفاصيل تقييمات الزوار</h4>
                                        <table class="table text-center text-dark">
                                            <thead>
                                            <tr>
                                                <th scope="col">الزائر</th>
                                                <th scope="col">1</th>
                                                <th scope="col">2</th>
                                                <th scope="col">3</th>
                                                <th scope="col">4</th>
                                                <th scope="col">5</th>
                                                <th scope="col">6</th>
                                                <th scope="col">7</th>
                                                <th scope="col">8</th>
                                                <th scope="col">9</th>
                                                <th scope="col">10</th>
                                                <th scope="col">11</th>
                                                <th scope="col">12</th>
                                                <th scope="col">13</th>
                                                <th scope="col">14</th>
                                                <th scope="col">15</th>
                                                <th scope="col">16</th>
                                                <th scope="col">17</th>
                                                <th scope="col">18</th>
                                                <th scope="col">19</th>
                                                <th scope="col">20</th>
                                                <th scope="col">نقاط القوة</th>
                                                <th scope="col">نقاط التحسن</th>
                                                <th scope="col">متوسط التقييم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- المنسق -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle;">المنسق</th>
                                                <td>58%</td>
                                                <td>60%</td>
                                                <td>62%</td>
                                                <td>64%</td>
                                                <td>66%</td>
                                                <td>68%</td>
                                                <td>70%</td>
                                                <td>72%</td>
                                                <td>74%</td>
                                                <td>76%</td>
                                                <td>78%</td>
                                                <td>80%</td>
                                                <td>82%</td>
                                                <td>84%</td>
                                                <td>86%</td>
                                                <td>88%</td>
                                                <td>90%</td>
                                                <td>92%</td>
                                                <td>94%</td>
                                                <td>96%</td>
                                                <td>متميز مع الطلاب ويجيد التفاعل</td>
                                                <td>
                                                    وجود أكثر من تهيئة<br>
                                                    الاجابات الجماعية<br>
                                                    الحركة في الصف<br>
                                                    مراعاة الفروق الفردية<br>
                                                    إتخاذ الاجراءات الصفية
                                                </td>
                                                <td class="text-danger">60%</td>
                                            </tr>
                                            <!-- Repeat rows with similar structure for other roles -->

                                            <!-- نائب اكاديمي -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle;">نائب اكاديمي</th>
                                                <td>58%</td>
                                                <td>60%</td>
                                                <td>62%</td>
                                                <td>64%</td>
                                                <td>66%</td>
                                                <td>68%</td>
                                                <td>70%</td>
                                                <td>72%</td>
                                                <td>74%</td>
                                                <td>76%</td>
                                                <td>78%</td>
                                                <td>80%</td>
                                                <td>82%</td>
                                                <td>84%</td>
                                                <td>86%</td>
                                                <td>88%</td>
                                                <td>90%</td>
                                                <td>92%</td>
                                                <td>94%</td>
                                                <td>96%</td>
                                                <td>---</td>
                                                <td>---</td>
                                                <td class="text-warning">72%</td>
                                            </tr>

                                            <!-- مدير -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">مدير</th>
                                                <td>58%</td>
                                                <td>60%</td>
                                                <td>62%</td>
                                                <td>64%</td>
                                                <td>66%</td>
                                                <td>68%</td>
                                                <td>70%</td>
                                                <td>72%</td>
                                                <td>74%</td>
                                                <td>76%</td>
                                                <td>78%</td>
                                                <td>80%</td>
                                                <td>82%</td>
                                                <td>84%</td>
                                                <td>86%</td>
                                                <td>88%</td>
                                                <td>90%</td>
                                                <td>92%</td>
                                                <td>94%</td>
                                                <td>96%</td>
                                                <td>جميل</td>
                                                <td>ازعاج</td>
                                                <td class="text-success">75%</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>


                                <div class="tab-pane" id="rate_statics" role="tabpanel">
                                    <div class="row g-2">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">اجمالي التقييمات خلال الزيارات</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-line"
                                                 style="width:100% !important;height: 600px !important;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end col-->
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.3/echarts.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.select2').select2();


            $( "#searchBtn" ).on( "click", function() {
                $('#reportSection').removeClass('d-none');
            });
            var chartDom = document.getElementById('chart-line');
            var myChart = echarts.init(chartDom);

            // Define the options for the chart
            var options = {
                title: {
                    text: 'النسبة'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    type: 'category',
                    data: ['الزيارة 1', 'الزيارة 2', 'الزيارة 3', 'الزيارة 4', 'الزيارة 5', 'الزيارة 6']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [92, 69.7, 75.2, 80, 66, 75],
                    type: 'line',
                    smooth: true
                }]
            };

            // Set the options on the chart
            myChart.setOption(options);

            // Ensure the chart resizes correctly
            $('#show-rate-statics').on('click', function (e) {
                myChart.resize();
            });

        });
    </script>

@endsection
