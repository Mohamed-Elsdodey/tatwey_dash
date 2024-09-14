<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ route('admin.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ get_file(setting()->logo_header) }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ get_file(setting()->logo_header) }}" alt="" height="40">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('admin.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ get_file(setting()->logo_header) }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ get_file(setting()->logo_header) }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admin.index' ? 'active' : '' }}"
                        href="{{ route('admin.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/home.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">لوحة التحكم</span>
                    </a>
                </li>

                <li class="nav-item">
                    <div class="AE_dropdown">
                        <a class="nav-link menu-link AE_dropdown-toggle {{ request()->routeIs('message_reports.index', 'teacher_reports.index', 'row_postive_review_reports.index', 'row_negative_review_reports.index', 'general_student_reports.index', 'registration_authorities_reports.index', 'negative_review_reports.index', 'postive_review_reports.index') ? 'active' : '' }}"
                            href="#!" id="AE_dropdownMenuButton">
                            <img src="{{ url('assets/dashboard/AE_style/images/report.png') }}" class="icon_sidebar">
                            <span data-key="t-dashboards">التقارير</span>
                            <i class="fa-solid fa-angle-left  AE_DropDownArrow"></i>
                        </a>
                        <ul class="AE_dropdown-menu " aria-labelledby="AE_dropdownMenuButton"
                            style="display: {{ request()->routeIs('message_reports.index', 'teacher_reports.index', 'row_postive_review_reports.index', 'row_negative_review_reports.index', 'general_student_reports.index', 'registration_authorities_reports.index', 'negative_review_reports.index', 'postive_review_reports.index') ? 'block' : 'none' }};">
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'message_reports.index' ? 'active' : '' }}"
                                    href="{{ route('message_reports.index') }}"> الرسائل</a></li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'teacher_reports.index' ? 'active' : '' }}"
                                    href="{{ route('teacher_reports.index') }}">تقرير التحفيز للمدرسين</a></li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'row_postive_review_reports.index' ? 'active' : '' }}"
                                    href="{{ route('row_postive_review_reports.index') }}">تقرير التحفيز للصفوف</a>
                            </li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'row_negative_review_reports.index' ? 'active' : '' }}"
                                    href="{{ route('row_negative_review_reports.index') }}">تقرير العقوبة للصفوف</a>
                            </li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'general_student_reports.index' ? 'active' : '' }}"
                                    href="{{ route('general_student_reports.index') }}">تقرير عام للطالب</a></li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'registration_authorities_reports.index' ? 'active' : '' }}"
                                    href="{{ route('registration_authorities_reports.index') }}">تقرير جهات التسجيل</a>
                            </li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'negative_review_reports.index' ? 'active' : '' }}"
                                    href="{{ route('negative_review_reports.index') }}">تقرير العقوبة</a></li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'postive_review_reports.index' ? 'active' : '' }}"
                                    href="{{ route('postive_review_reports.index') }}">تقرير التحفيز</a></li>
                        </ul>


                    </div>
                </li>

                <li class="nav-item">
                    <div class="AE_dropdown">
                        <a class="nav-link menu-link AE_dropdown-toggle {{ request()->routeIs('standard_sections.index', 'standards.index') ? 'active' : '' }}"
                            href="#!" id="AE_dropdownMenuButton2">
                            <img src="{{ url('assets/dashboard/AE_style/images/standard.png') }}" class="icon_sidebar">
                            <span data-key="t-dashboards">المعاير</span>
                            <i class="fa-solid fa-angle-left  AE_DropDownArrow"></i>
                        </a>


                        <ul class="AE_dropdown-menu" aria-labelledby="AE_dropdownMenuButton2"
                            style="display: {{ request()->routeIs('standard_sections.index', 'standards.index') ? 'block' : 'none' }};">
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'standard_sections.index' ? 'active' : '' }}"
                                    href="{{ route('standard_sections.index') }}">أقسام المعاير</a></li>
                            <li><a class="AE_dropdown-item {{ request()->route()->getName() == 'standards.index' ? 'active' : '' }}"
                                    href="{{ route('standards.index') }}">المعاير</a></li>
                        </ul>


                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admins.index' ? 'active' : '' }}"
                        href="{{ route('admins.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/admin.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">مسؤول النظام</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'categories.index' ? 'active' : '' }}"
                        href="{{ route('categories.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/books.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المواد الدراسية</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'rows.index' ? 'active' : '' }}"
                        href="{{ route('rows.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/bars.svg') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الصفوف الدراسية</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'teachers.index' ? 'active' : '' }}"
                        href="{{ route('teachers.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/teacher.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المدرسين</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'best_students.index' ? 'active' : '' }}"
                        href="{{ route('best_students.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/best.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الطلاب المتميزين</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'bad_students.index' ? 'active' : '' }}"
                        href="{{ route('bad_students.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/badstudent.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">التوجيه والإرشاد</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'parents.index' ? 'active' : '' }}"
                        href="{{ route('parents.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/parents.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">أولياء الأمور</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'exams.index' ? 'active' : '' }}"
                        href="{{ route('exams.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/exam.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الاختبارات</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'moderators.index' ? 'active' : '' }}"
                        href="{{ route('moderators.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/moderator.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">المشرف الإداري</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'absences.index' ? 'active' : '' }}"
                        href="{{ route('absences.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/absence.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">الغياب والتأخير</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admin.positive_calender' ? 'active' : '' }}"
                        href="{{ route('admin.positive_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/positive.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تقويم التميز</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'admin.negative_calender' ? 'active' : '' }}"
                        href="{{ route('admin.negative_calender') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/negative.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards">تقويم العقوبة</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'notifications.index' ? 'active' : '' }}"
                        href="{{ route('notifications.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/notification.png') }}"
                            class="icon_sidebar">
                        <span data-key="t-dashboards">الإشعارات والرسائل</span>
                    </a>
                </li>



                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'administrations.index' ? 'active' : '' }}"
                        href="{{ route('administrations.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/administrations.png') }}"
                            class="icon_sidebar">
                            
                        <span data-key="t-dashboards"> الادارة</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'days.index' ? 'active' : '' }}"
                        href="{{ route('days.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/days.png')}}" class="icon_sidebar">
                        <span data-key="t-dashboards"> ايام العمل</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'sessions.index' ? 'active' : '' }}"
                        href="{{ route('sessions.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/lessons.png') }}"
                            class="icon_sidebar">
                        <span data-key="t-dashboards">  الحصص الدراسية</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'schedules.index' ? 'active' : '' }}"
                        href="{{ route('schedules.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/calendar.png') }}"
                            class="icon_sidebar">
                        <span data-key="t-dashboards">   الجداول الدراسية</span>
                    </a>
                </li> <!-- end Dashboard Menu -->





                <li class="nav-item">
                    <a class="nav-link menu-link {{ request()->route()->getName() == 'settings.index' ? 'active' : '' }}"
                        href="{{ route('settings.index') }}">
                        <img src="{{ url('assets/dashboard/AE_style/images/setting.png') }}" class="icon_sidebar">
                        <span data-key="t-dashboards"> الاعدادات</span>
                    </a>
                </li> <!-- end Dashboard Menu -->






            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->


<div class="vertical-overlay"></div>
