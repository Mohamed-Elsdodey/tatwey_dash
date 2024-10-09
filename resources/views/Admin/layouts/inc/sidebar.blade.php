<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.index') }}" class="logo logo-dark mt-2">
            <span class="logo-sm">
                <img src="{{asset('assets/AE_style/images/newlogo.png')}}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/AE_style/images/newlogo.png')}}" alt="" height="90" width="125">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.index') }}" class="logo logo-light mt-2">
            <span class="logo-sm">
                <img src="{{asset('assets/AE_style/images/newlogo.png')}}" alt="" height="40">
            </span>
            <span class="logo-lg">
                <img src="{{asset('assets/AE_style/images/newlogo.png')}}" alt="" height="80" width="110">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>
{{--            <input type="text" id="searchSideBar" class="form-control mb-1 mt-1" placeholder="{{helperTrans('admin.Search for a page')}}...">--}}
            <p id="resultCount" style="display: none">{{helperTrans('admin.results 0')}} </p>
            <ul class="navbar-nav" id="navbar-nav">

                <!-- الادارة -->
                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/job1.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المسميات الوظيفية</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/job4.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الموظفون</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/menu.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المراحل التعلمية</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'rows.index' ? 'active' : '' }}"
                       href="{{ route('rows.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/lessons.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الصفوف الدراسية</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/categories.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الشعب</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'categories.index' ? 'active' : '' }}"
                       href="{{ route('categories.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/books.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المواد الدراسية</span>
                    </a>
                </li>


                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'parents.index' ? 'active' : '' }}"
                       href="{{ route('parents.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/parents.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">أولياء الأمور</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/students.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الطلاب</span>
                    </a>
                </li>


                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/student1.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">نقل الطلاب</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admins.index' ? 'active' : '' }}"
                       href="{{ route('admins.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/group.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">حسابات المستخدمين</span>
                    </a>
                </li>


                <li class="nav-item nav-side-ya d-none" data-id="edara">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'settings.index' ? 'active' : '' }}"
                       href="{{ route('settings.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/setting.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards"> الاعدادات</span>
                    </a>
                </li>

                <!-- نهاية الادارة -->




                <!-- التحفييز -->
                <li class="nav-item nav-side-ya d-none d-none" data-id="tahfez">
                    <a class="nav-link menu-link"
                       href="#">
                        <img src="{{ url('assets/dashboard/AE_style/images/points.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">نقاط التميز والعقوبة</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none d-none" data-id="tahfez">
                    <a class="nav-link menu-link"
                       href="#">
                        <img src="{{ url('assets/dashboard/AE_style/images/best2.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الطلاب المميزين</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none d-none" data-id="tahfez">
                    <a class="nav-link menu-link  {{ request()->route()->getName() == 'bad_students.index' ? 'active' : '' }}"
                       href="{{ route('bad_students.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/guidance2.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الارشاد والتوجيه</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none d-none" data-id="tahfez">
                    <a class="nav-link menu-link  {{ request()->route()->getName() == 'admin.positive_calender' ? 'active' : '' }}"
                       href="{{ route('admin.positive_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/reward2.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تقويم التميز</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="tahfez">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admin.negative_calender' ? 'active' : '' }}"
                       href="{{ route('admin.negative_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/bad2.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تقويم العقوبة</span>
                    </a>
                </li>
                <!-- نهاية التحفيز -->


                <!-- تقييم المعملين -->
                <li class="nav-item nav-side-ya d-none" data-id="taqeem">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/evaluation1.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">معايير التقييم</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="taqeem">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'standard_sections.index' ? 'active' : '' }}"
                       href="{{ route('admin.negative_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/bars.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">فئات المعايير</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="taqeem">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'standards.index' ? 'active' : '' }}"
                       href="{{ route('admin.negative_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/standard.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المعايير</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="taqeem">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/edit.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">اضافة وحذف المعايير</span>
                    </a>
                </li>


                <li class="nav-item nav-side-ya d-none" data-id="taqeem">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/evaluation2.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تقييم معلم</span>
                    </a>
                </li>
                <!-- نهاية تقييم المعملين -->



                <!-- الغياب والتاخير -->
                <li class="nav-item nav-side-ya d-none" data-id="late">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'absences.index' ? 'active' : '' }}"
                       href="{{ route('absences.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/absence.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تسجيل الغياب</span>
                    </a>
                </li>
                <!--نهاية الغياب والتاخير -->

                <!-- ارسال وتنبيهات -->
                <li class="nav-item nav-side-ya d-none" data-id="notification-send">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/message.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">اضافة رسالة</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="notification-send">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'notifications.index' ? 'active' : '' }}"
                       href="{{ route('notifications.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/notification.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">اضافة إشعار</span>
                    </a>
                </li>

                <!--نهاية ارسال وتنبيهات -->


                <!-- اكاديمي -->
                <li class="nav-item nav-side-ya d-none" data-id="academic">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'schedules.index' ? 'active' : '' }}"
                       href="{{ route('schedules.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/calendar.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">جداول الحصص</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="academic">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'days.index' ? 'active' : '' }}"
                       href="{{ route('days.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/days.png')}}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> ايام العمل</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="academic">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'sessions.index' ? 'active' : '' }}"
                       href="{{ route('sessions.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/lessons.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards">  الحصص الدراسية</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="academic">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/scores.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تسجيل درجات الاختبار</span>
                    </a>
                </li>
                <!--نهاية اكاديمي -->


                <!-- التقارير -->
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-lin {{ request()->route()->getName() == 'message_reports.index' ? 'active' : '' }}"
                       href="{{ route('message_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report2.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير الرسايل والاشعارات</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'message_reports.index' ? 'active' : '' }}"
                       href="{{ route('message_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report3.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير عام للطالب</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'registration_authorities_reports.index' ? 'active' : '' }}"
                       href="{{ route('registration_authorities_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report4.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير جهات التسجيل</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'teacher_reports.index' ? 'active' : '' }}"
                       href="{{ route('teacher_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report14.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير التحفييز للمدرسين</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'row_postive_review_reports.index' ? 'active' : '' }}"
                       href="{{ route('row_postive_review_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report13.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير التحفيز للصفوف</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'row_negative_review_reports.index' ? 'active' : '' }}"
                       href="{{ route('row_negative_review_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report12.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير العقوبة للصفوف</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'postive_review_reports.index' ? 'active' : '' }}"
                       href="{{ route('postive_review_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report8.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير التحفيز</span>
                    </a>
                </li>
                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'negative_review_reports.index' ? 'active' : '' }}"
                       href="{{ route('negative_review_reports.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/report7.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير العقوبة</span>
                    </a>
                </li>

                <li class="nav-item nav-side-ya d-none" data-id="reports">
                    <a class="nav-link menu-link"
                       href="#!">
                        <img src="{{ url('assets/dashboard/AE_style/images/report.png') }}"
                             class="icon_sidebar">
                        <span data-key="t-dashboards"> تقرير الغياب والتأخير</span>
                    </a>
                </li>
                <!--نهاية التقارير -->


{{--                <li class="nav-item nav-side-ya d-none" id="side-section-3">--}}
{{--                    <div class="AE_dropdown">--}}
{{--                        <a class="nav-link menu-link AE_dropdown-toggle {{ request()->routeIs('standard_sections.index', 'standards.index') ? 'active' : '' }}"--}}
{{--                           href="#!" id="AE_dropdownMenuButton2">--}}
{{--                            <img src="{{ url('assets/dashboard/AE_style/images/standard.png') }}" class="icon_sidebar">--}}
{{--                            <span data-key="t-dashboards">المعاير</span>--}}
{{--                            <i class="fa-solid fa-angle-left  AE_DropDownArrow"></i>--}}
{{--                        </a>--}}


{{--                        <ul class="AE_dropdown-menu" aria-labelledby="AE_dropdownMenuButton2"--}}
{{--                            style="display: {{ request()->routeIs('standard_sections.index', 'standards.index') ? 'block' : 'none' }};">--}}
{{--                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'standard_sections.index' ? 'active' : '' }}"--}}
{{--                                   href="{{ route('standard_sections.index') }}">أقسام المعاير</a></li>--}}
{{--                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'standards.index' ? 'active' : '' }}"--}}
{{--                                   href="{{ route('standards.index') }}">المعاير</a></li>--}}
{{--                        </ul>--}}


{{--                    </div>--}}
{{--                </li>--}}



{{--                <li class="nav-item nav-side-ya d-none" id="side-section-6">--}}
{{--                    <a class="nav-link menu-link {{ request()->route()->getName() == 'teachers.index' ? 'active' : '' }}"--}}
{{--                       href="{{ route('teachers.index') }}">--}}
{{--                        <img src="{{ url('assets/dashboard/AE_style/images/teacher.png') }}" class="icon_sidebar">--}}
{{--                        <span data-key="t-dashboards">المدرسين</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



{{--                <li class="nav-item nav-side-ya d-none" id="side-section-10">--}}
{{--                    <a class="nav-link menu-link {{ request()->route()->getName() == 'exams.index' ? 'active' : '' }}"--}}
{{--                       href="{{ route('exams.index') }}">--}}
{{--                        <img src="{{ url('assets/dashboard/AE_style/images/exam.png') }}" class="icon_sidebar">--}}
{{--                        <span data-key="t-dashboards">الاختبارات</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li class="nav-item nav-side-ya d-none" id="side-section-11">--}}
{{--                    <a class="nav-link menu-link {{ request()->route()->getName() == 'moderators.index' ? 'active' : '' }}"--}}
{{--                       href="{{ route('moderators.index') }}">--}}
{{--                        <img src="{{ url('assets/dashboard/AE_style/images/moderator.png') }}" class="icon_sidebar">--}}
{{--                        <span data-key="t-dashboards">المشرف الإداري</span>--}}
{{--                    </a>--}}
{{--                </li>--}}



{{--                <li class="nav-item nav-side-ya d-none" id="side-section-16">--}}
{{--                    <a class="nav-link menu-link {{ request()->route()->getName() == 'administrations.index' ? 'active' : '' }}"--}}
{{--                       href="{{ route('administrations.index') }}">--}}
{{--                        <img src="{{ url('assets/dashboard/AE_style/images/administrations.png') }}"--}}
{{--                             class="icon_sidebar">--}}
{{--                        <span data-key="t-dashboards"> الادارة</span>--}}
{{--                    </a>--}}
{{--                </li>--}}




                <!-- end Dashboard Menu -->




            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->


<div class="vertical-overlay"></div>
