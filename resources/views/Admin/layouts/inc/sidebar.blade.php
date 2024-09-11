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
            <input type="text" id="searchSideBar" class="form-control mb-1 mt-1" placeholder="{{helperTrans('admin.Search for a page')}}...">
            <p id="resultCount" style="display: none">{{helperTrans('admin.results 0')}} </p>
            <ul class="navbar-nav" id="navbar-nav">

                <li class="nav-item ">
                    <a class="nav-link menu-link active" href="{{ route('admin.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/home.svg')}}" class="icon_sidebar">
                        <span data-key="t-dashboards">{{ helperTrans('admin.dashboard') }}</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admins.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/admin.svg')}}" class="icon_sidebar">

                        <span data-key="t-admins">{{ helperTrans('admin.system admins') }}</span>
                    </a>
                </li> <!-- end System Admins Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('categories.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/books.svg')}}" class="icon_sidebar">

                        <span data-key="t-categories">{{ helperTrans('admin.categories') }}</span>
                    </a>
                </li> <!-- end Categories Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('rows.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/bars.svg')}}" class="icon_sidebar">
                        </i> <span data-key="t-rows">{{ helperTrans('admin.rows') }}</span>
                    </a>
                </li> <!-- end Rows Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('settings.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/setting.png')}}" class="icon_sidebar">
                        <span data-key="t-settings">{{ helperTrans('admin.settings') }}</span>
                    </a>
                </li> <!-- end Settings Menu -->






                {{-- <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.questions') }}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">{{ helperTrans('admin.evaluation_form') }}</span>
                    </a>
                </li> <!-- end Evaluation Form Menu --> --}}

                <li class="nav-item">
                    <div class="AE_dropdown">
                        <a class="nav-link menu-link AE_dropdown-toggle" href="#!" id="AE_dropdownMenuButton">
                            <img src="{{url('assets/dashboard/AE_style/images/report.png')}}" class="icon_sidebar">
                            <span data-key="t-reports">{{ helperTrans('admin.reports') }}</span>
                            <i class="fa-solid fa-angle-left AE_DropDownArrow"></i>
                        </a>
                        <ul class="AE_dropdown-menu" aria-labelledby="AE_dropdownMenuButton">
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.message reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.teacher reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.row positive review reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.row negative review reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.general student reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.registration authorities reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.negative review reports') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.positive review reports') }}</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <div class="AE_dropdown">
                        <a class="nav-link menu-link AE_dropdown-toggle" href="#!" id="AE_dropdownMenuButton2">
                            <img src="{{url('assets/dashboard/AE_style/images/standard.png')}}" class="icon_sidebar">
                            <span data-key="t-standards">{{ helperTrans('admin.standards') }}</span>
                            <i class="fa-solid fa-angle-left AE_DropDownArrow"></i>
                        </a>
                        <ul class="AE_dropdown-menu" aria-labelledby="AE_dropdownMenuButton2">
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.standard sections') }}</a></li>
                            <li><a class="AE_dropdown-item" href="#">{{ helperTrans('admin.standards') }}</a></li>
                        </ul>
                    </div>
                </li>




                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('teachers.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/teacher.png')}}" class="icon_sidebar">
                        <span data-key="t-teachers">{{ helperTrans('admin.teachers') }}</span>
                    </a>
                </li> <!-- end Teachers Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('best_students.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/best.png')}}" class="icon_sidebar">
                        <span data-key="t-best_students">{{ helperTrans('admin.best students') }}</span>
                    </a>
                </li> <!-- end Best Students Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('bad_students.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/badstudent.png')}}" class="icon_sidebar">
                        <span data-key="t-guidance">{{ helperTrans('admin.bad students') }}</span>
                    </a>
                </li> <!-- end Guidance Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('parents.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/parents.png')}}" class="icon_sidebar">
                        <span data-key="t-parents">{{ helperTrans('admin.parents') }}</span>
                    </a>
                </li> <!-- end Parents Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('exams.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/exam.png')}}" class="icon_sidebar">
                        <span data-key="t-exams">{{ helperTrans('admin.exams') }}</span>
                    </a>
                </li> <!-- end Exams Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('moderators.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/moderator.png')}}" class="icon_sidebar">
                        <span data-key="t-moderators">{{ helperTrans('admin.moderators') }}</span>
                    </a>
                </li> <!-- end Moderators Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('absences.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/absence.png')}}" class="icon_sidebar">
                        <span data-key="t-absences">{{ helperTrans('admin.absences') }}</span>
                    </a>
                </li> <!-- end Absences Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.positive_calender') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/positive.png')}}" class="icon_sidebar">
                        <span data-key="t-positive_calender">{{ helperTrans('admin.positive calender') }}</span>
                    </a>
                </li> <!-- end Positive Calendar Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.negative_calender') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/negative.png')}}" class="icon_sidebar">
                        <span data-key="t-negative_calender">{{ helperTrans('admin.negative calender') }}</span>
                    </a>
                </li> <!-- end Negative Calendar Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('notifications.index') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/notification.png')}}" class="icon_sidebar">
                        <span data-key="t-notifications">{{ helperTrans('admin.notifications') }}</span>
                    </a>
                </li> <!-- end Notifications Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#">
                        <img src="{{url('assets/dashboard/AE_style/images/administrations.png')}}" class="icon_sidebar">
                        <span data-key="t-administrations">{{ helperTrans('admin.administrations') }}</span>
                    </a>
                </li> <!-- end Administrations Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.showSchedule') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/days.png')}}" class="icon_sidebar">
                        <span data-key="t-administrations">ايام العمل</span>
                    </a>
                </li> <!-- end Administrations Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.showSchedule') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/lessons.png')}}" class="icon_sidebar">
                        <span data-key="t-administrations">الحصص الدراسية</span>
                    </a>
                </li> <!-- end Administrations Menu -->

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('admin.showSchedule') }}">
                        <img src="{{url('assets/dashboard/AE_style/images/calendar.png')}}" class="icon_sidebar">
                        <span data-key="t-administrations">{{ helperTrans('admin.School schedule') }}</span>
                    </a>
                </li> <!-- end Administrations Menu -->

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->

<div class="vertical-overlay"></div>
