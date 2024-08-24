@extends('Admin.layouts.inc.app')
@section('title')
    تقرير المدرسة
@endsection

@section('css')
    <style>
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
                <div class="col-md-4 col-6 mb-4">
                    <h3>من تاريخ </h3>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-4 col-6 mb-4">
                    <h3>الي تاريخ </h3>
                    <input type="date" class="form-control">
                </div>
                <div class="col-md-4 col-6 mt-4">
                    <button class="btn btn-success mt-2" id="searchBtn">عرض التقرير</button>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="card-body d-none" id="reportSection">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card mt-xxl-n5">
                        <div class="card-header">
                            <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" data-bs-toggle="tab" href="#subjectOrder" role="tab"
                                       aria-selected="true">
                                        <i class="fa fa-book icon-header"></i> ترتيب المواد
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#standardOrder" role="tab"
                                       aria-selected="true">
                                        <i class="fas fa-bars icon-header"></i> ترتيب المعايير
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="show-rate-statics" data-bs-toggle="tab"
                                       href="#visits_statics"
                                       role="tab"
                                       aria-selected="false" tabindex="-1">
                                        <i class="fa fa-line-chart icon-header"></i> مخطط عدد التقييمات للمواد
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="show-rate-statics2" data-bs-toggle="tab"
                                       href="#subject_statics"
                                       role="tab"
                                       aria-selected="false" tabindex="-1">
                                        <i class="fa fa-line-chart icon-header"></i> مخطط مقارنة بين المواد
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" data-bs-toggle="tab" href="#rateDetails"
                                       role="tab"
                                       aria-selected="false" tabindex="-1">
                                        <i class="fa fa-info icon-header"></i> تقييم المعايير للمواد
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body p-2" style="margin-top: 50px">
                            <div class="tab-content">
                                <div class="tab-pane active" id="subjectOrder" role="tabpanel">

                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-md-9 col-12">
                                                    <table class="table text-center text-dark">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">الترتيب</th>
                                                            <th scope="col">المادة</th>
                                                            <th scope="col">النسبة المئوية</th>
                                                            <th scope="col">عدد التقييمات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="table-success">
                                                            <th>1</th>
                                                            <th>دراسات اجتماعية</th>
                                                            <th>90%</th>
                                                            <th>49</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>2</th>
                                                            <th>عربي</th>
                                                            <th>85.6%</th>
                                                            <th>77</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>3</th>
                                                            <th>رياضيات</th>
                                                            <th>74.2%</th>
                                                            <th>23</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>4</th>
                                                            <th>علوم</th>
                                                            <th>71%</th>
                                                            <th>20</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>5</th>
                                                            <th>هندسة</th>
                                                            <th>67%</th>
                                                            <th>48</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>6</th>
                                                            <th>لغة انجليزية</th>
                                                            <th>59%</th>
                                                            <th>67</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>7</th>
                                                            <th>حوسبة وتكنولوجيا</th>
                                                            <th>55%</th>
                                                            <th>12</th>
                                                        </tr>
                                                        <tr class="fw-bolder">
                                                            <th colspan="2" class="text-center">الاجمالي</th>
                                                            <th class="text-success">88.5%</th>
                                                            <th>245</th>
                                                        </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="col-md-3 col-12">
                                                    <table class="table text-center text-dark">
                                                        <thead>
                                                        <tr>
                                                            <th colspan="2" class="text-center">عدد التقييمات</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <th> مدير المدرسة</th>
                                                            <th> 148</th>
                                                        </tr>
                                                        <tr>
                                                            <th>النائب الاكاديمي</th>
                                                            <th> 103</th>
                                                        </tr>
                                                        <tr>
                                                            <th> المنسق</th>
                                                            <th> 91</th>
                                                        </tr>
                                                        <tr>
                                                            <th> عدد الزيارات</th>
                                                            <th> 245</th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="standardOrder" role="tabpanel">

                                    <div class="card mt-n5">
                                        <div class="card-body p-4">
                                            <div class="row">
                                                <div class="col-12">
                                                    <table class="table text-center text-dark">
                                                        <thead>
                                                        <tr>
                                                            <th scope="col">الترتيب</th>
                                                            <th scope="col">المعيار</th>
                                                            <th scope="col">النسبة المئوية</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr class="table-success">
                                                            <th>1</th>
                                                            <th>
                                                                خطة الدرس متوفرة وبنودها مستكملة ومناسبة<br>
                                                                الأهداف صحيحة<br>
                                                                الاستراتيجيات تتمحور حول الطالب<br>
                                                                الأنشطة مرتبطة بالأهداف<br>
                                                                التقويم وتنوع أدواته<br>
                                                                التوزيع الزمني لعناصر الخطة
                                                            </th>
                                                            <th>90%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>2</th>
                                                            <th>
                                                                التفاعل مع الطلاب كان جيدًا<br>
                                                                الوقت المخصص للدرس مناسب<br>
                                                                توفر المصادر التعليمية المناسبة<br>
                                                                تطبيق مهارات التفكير الناقد<br>
                                                                ربط الدرس بالحياة العملية
                                                            </th>
                                                            <th>75%</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>3</th>
                                                            <th>
                                                                مستوى التفاعل مع الطلاب ضعيف<br>
                                                                التقييم غير متنوع<br>
                                                                الوقت المستغرق غير مناسب<br>
                                                                الأنشطة غير ملائمة للأهداف<br>
                                                                ضعف في إدارة الصف
                                                            </th>
                                                            <th>50%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>4</th>
                                                            <th>
                                                                تنفيذ الأنشطة التعليمية بشكل جيد<br>
                                                                تفاعل الطلاب مع المحتوى<br>
                                                                تقديم تغذية راجعة فعالة<br>
                                                                توفير أدوات وتقنيات حديثة<br>
                                                                احترام وقت الدرس
                                                            </th>
                                                            <th>92%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>5</th>
                                                            <th>
                                                                تحقيق معظم أهداف الدرس<br>
                                                                استخدام استراتيجيات متعددة<br>
                                                                توفر بيئة صفية مشجعة<br>
                                                                استغلال الوسائل التعليمية بشكل جزئي<br>
                                                                توزيع الوقت بشكل غير متساوٍ
                                                            </th>
                                                            <th>70%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>6</th>
                                                            <th>
                                                                الالتزام بالخطة الزمنية للدرس<br>
                                                                التفاعل مع الطلاب بطريقة إيجابية<br>
                                                                استخدام الوسائل التعليمية بفعالية<br>
                                                                تعزيز مهارات التفكير العليا<br>
                                                                تقديم تقويم شامل للأداء
                                                            </th>
                                                            <th>88%</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>7</th>
                                                            <th>
                                                                انخفاض مستوى التحفيز لدى الطلاب<br>
                                                                ضعف في استخدام التقنيات التعليمية<br>
                                                                قلة التنوع في استراتيجيات التدريس<br>
                                                                عدم تحقيق معظم أهداف الدرس<br>
                                                                ضعف التفاعل مع الأنشطة
                                                            </th>
                                                            <th>45%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>8</th>
                                                            <th>
                                                                تحقيق توازن بين الأنشطة والتقويم<br>
                                                                تقديم محتوى غني ومتنوع<br>
                                                                إشراك الطلاب في التعلم<br>
                                                                احترام الاختلافات الفردية<br>
                                                                تحسين الأداء عبر التغذية الراجعة
                                                            </th>
                                                            <th>85%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>9</th>
                                                            <th>
                                                                جودة المحتوى المقدّم<br>
                                                                تنويع أساليب التدريس<br>
                                                                استغلال الوقت بشكل فعال<br>
                                                                تشجيع الطلاب على التفكير الناقد<br>
                                                                تحقيق معظم أهداف الدرس
                                                            </th>
                                                            <th>78%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>10</th>
                                                            <th>
                                                                استخدام استراتيجيات تعليمية مبتكرة<br>
                                                                تفاعل كبير من الطلاب<br>
                                                                إدارة الوقت بشكل مثالي<br>
                                                                تقديم تغذية راجعة فورية<br>
                                                                تعزيز التفاعل الجماعي
                                                            </th>
                                                            <th>91%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>11</th>
                                                            <th>
                                                                توظيف الوسائل التعليمية المتاحة<br>
                                                                استخدام تقنيات تعليمية حديثة<br>
                                                                تحفيز الطلاب على المشاركة<br>
                                                                تعزيز التفاعل الفردي<br>
                                                                تقديم تقويم تحصيلي متوسط
                                                            </th>
                                                            <th>72%</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>12</th>
                                                            <th>
                                                                ضعف في إدارة الصف<br>
                                                                استخدام أدوات تقويم غير كافية<br>
                                                                قلة التنوع في الأنشطة<br>
                                                                عدم تحقيق أهداف الدرس<br>
                                                                قلة المشاركة من الطلاب
                                                            </th>
                                                            <th>48%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>13</th>
                                                            <th>
                                                                تحقيق جميع أهداف الدرس<br>
                                                                استخدام وسائل تعليمية متعددة<br>
                                                                تعزيز التفكير الإبداعي<br>
                                                                تقديم تغذية راجعة متكررة<br>
                                                                إدارة الوقت بشكل ممتاز
                                                            </th>
                                                            <th>94%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>14</th>
                                                            <th>
                                                                تقديم محتوى مناسب<br>
                                                                تفاعل الطلاب مع المحتوى<br>
                                                                استخدام تقنيات تعليمية بشكل متوسط<br>
                                                                تحفيز الطلاب على المشاركة<br>
                                                                تحقيق معظم أهداف الدرس
                                                            </th>
                                                            <th>68%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>15</th>
                                                            <th>
                                                                التزام بالخطة الزمنية<br>
                                                                تقديم محتوى تعليمي متنوع<br>
                                                                استخدام استراتيجيات تعليمية حديثة<br>
                                                                تقديم تقويم شامل ودقيق<br>
                                                                احترام الفروق الفردية
                                                            </th>
                                                            <th>87%</th>
                                                        </tr>
                                                        <tr class="table-danger">
                                                            <th>16</th>
                                                            <th>
                                                                قلة في التفاعل مع الطلاب<br>
                                                                ضعف في إدارة الوقت<br>
                                                                استخدام استراتيجيات تقليدية<br>
                                                                عدم تقديم تغذية راجعة كافية<br>
                                                                عدم تحقيق الأهداف بشكل كامل
                                                            </th>
                                                            <th>52%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>17</th>
                                                            <th>
                                                                استخدام أدوات تقويم متنوعة<br>
                                                                تحفيز الطلاب على التفكير الإبداعي<br>
                                                                تقديم محتوى تعليمي غني<br>
                                                                تعزيز التعلم التعاوني<br>
                                                                تحقيق جميع أهداف الدرس
                                                            </th>
                                                            <th>89%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>18</th>
                                                            <th>
                                                                استخدام الوسائل التعليمية بشكل جزئي<br>
                                                                تفاعل محدود من الطلاب<br>
                                                                تطبيق استراتيجيات تقليدية<br>
                                                                تحقيق جزء من أهداف الدرس<br>
                                                                إدارة وقت الدرس بشكل متوسط
                                                            </th>
                                                            <th>65%</th>
                                                        </tr>
                                                        <tr class="table-success">
                                                            <th>19</th>
                                                            <th>
                                                                استخدام تقنيات تعليمية حديثة<br>
                                                                تفاعل إيجابي من الطلاب<br>
                                                                تقديم تغذية راجعة شاملة<br>
                                                                تعزيز التفكير الناقد<br>
                                                                إدارة الوقت بشكل فعال
                                                            </th>
                                                            <th>93%</th>
                                                        </tr>
                                                        <tr class="table-warning">
                                                            <th>20</th>
                                                            <th>
                                                                تقديم محتوى تعليمي مناسب<br>
                                                                تحفيز محدود للطلاب<br>
                                                                تطبيق تقنيات تعليمية بشكل محدود<br>
                                                                تحقيق معظم الأهداف<br>
                                                                توزيع وقت الدرس بشكل غير متساوٍ
                                                            </th>
                                                            <th>70%</th>
                                                        </tr>
                                                        <tr class="fw-bolder">
                                                            <th colspan="2" class="text-center">المتوسط</th>
                                                            <th class="text-success">78%</th>
                                                        </tr>
                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="visits_statics" role="tabpanel">
                                    <div class="row g-2">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">اعداد التقييمات لكل مادة</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-line"
                                                 style="width:100% !important;height: 600px !important;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="subject_statics" role="tabpanel">
                                    <div class="row g-2">
                                        <div class="card-header">
                                            <h4 class="card-title mb-0">يعرض المخطط مقارنة بين المواد حسب النسبة المئوية
                                                لكل مادة</h4>
                                        </div>
                                        <div class="card-body">
                                            <div id="chart-line2"
                                                 style="width:100% !important;height: 600px !important;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="rateDetails" role="tabpanel">
                                    <div class="row">
                                        <h4 class="mb-3 p-4">يعرض المخطط تفاصيل تقييمات المعايير لكل مادة</h4>
                                        <table class="table text-center text-dark">
                                            <thead>
                                            <tr>
                                                <th scope="col">المادة</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">1</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">2</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">3</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">4</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">5</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">6</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">7</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">8</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">9</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">10</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">11</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">12</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">13</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">14</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">15</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">16</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">17</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">18</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">19</th>
                                                <th scope="col" title="معيار التحقق من جودة الشرح">20</th>
                                                <th scope="col">متوسط التقييم</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <!-- عربي -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle;">عربي</th>
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
                                                <td class="text-danger">60%</td>
                                            </tr>

                                            <!-- رياضة -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle;">رياضة</th>
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
                                                <td class="text-warning">72%</td>
                                            </tr>

                                            <!-- دين -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">
                                                    دين
                                                </th>
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
                                                <td class="text-success">75%</td>
                                            </tr>

                                            <!-- دراسات -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">
                                                    دراسات
                                                </th>
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
                                                <td class="text-success">75%</td>
                                            </tr>

                                            <!-- فيزياء -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">
                                                    فيزياء
                                                </th>
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
                                                <td class="text-success">75%</td>
                                            </tr>

                                            <!-- علوم -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">
                                                    علوم
                                                </th>
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
                                                <td class="text-success">75%</td>
                                            </tr>

                                            <!-- لغة انجليزية -->
                                            <tr>
                                                <th scope="row" style="vertical-align: middle; font-weight: bolder;">
                                                    لغة انجليزية
                                                </th>
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
                                                <td class="text-success">75%</td>
                                            </tr>

                                            </tbody>
                                        </table>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.3.3/echarts.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#searchBtn").on("click", function () {
                $('#reportSection').removeClass('d-none');
            });

            // اول مخطط
            var chartDom = document.getElementById('chart-line');
            var myChart = echarts.init(chartDom);

            // Define the options for the chart
            var options = {
                title: {
                    text: 'عدد التفييمات'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    type: 'category',
                    data: ['عربي', 'دين', 'انجليزي', 'رسم', 'رياضيات', 'فنون', 'دراسات', 'علوم']
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [92, 14, 20, 80, 66, 75, 5, 47],
                    type: 'line',
                    smooth: true,
                    label: {
                        show: true, // Display the labels
                        position: 'top', // Position the label at the top of the point
                        formatter: '{c}' // Display the value of the point
                    }
                }]
            };

            // Set the options on the chart
            myChart.setOption(options);

            // Ensure the chart resizes correctly
            $('#show-rate-statics').on('click', function (e) {
                myChart.resize();
            });
            ////////////////////////////////////////////////////

            // تاني مخطط
            // Initialize the chart for the second graph
            var chartDom2 = document.getElementById('chart-line2');
            var myChart2 = echarts.init(chartDom2);

// Define the options for the bar chart with color based on value
            var options2 = {
                title: {
                    text: 'النسبة المئوية'
                },
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow' // Use a shadow pointer
                    }
                },
                xAxis: {
                    type: 'category',
                    data: ['عربي', 'دين', 'انجليزي', 'رسم', 'رياضيات', 'فنون', 'دراسات', 'علوم'],
                },
                yAxis: {
                    type: 'value'
                },
                series: [{
                    data: [92.7, 75.5, 80, 85, 68, 75.2, 95, 88],
                    type: 'bar',
                    barWidth: '50%', // Control the width of the bars
                    label: {
                        show: true, // Display the labels
                        position: 'top', // Position the label at the top of the bar
                        formatter: '{c}%' // Display the value of the bar with a percentage sign
                    },
                    itemStyle: {
                        color: function(params) {
                            var value = params.value;
                            if (value >= 90) {
                                return '#52B2A6';
                            } else if (value >= 75) {
                                return '#E6B848';
                            } else {
                                return '#C14D37';
                            }
                        }
                    }
                }]
            };

// Set the options on the chart
            myChart2.setOption(options2);

// Ensure the chart resizes correctly
            $('#show-rate-statics2').on('click', function (e) {
                myChart2.resize();
            });
            ////////////////////////////////////////////////////

        });
    </script>

@endsection
