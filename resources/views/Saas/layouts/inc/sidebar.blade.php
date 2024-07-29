<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('teacher.index')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="40">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('teacher.index')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="40">
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
                    <a class="nav-link menu-link" href="{{route('saas.index')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">لوحة التحم</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('saas_data.index')}}">
                        <i class="fa fa-user-secret"></i> <span data-key="t-dashboards">المديرين</span>
                    </a>
                </li> <!-- end Dashboard Menu -->



                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('schools.index')}}">
                        <i class="fa fa-school"></i> <span data-key="t-dashboards">المدارس</span>
                    </a>
                </li> <!-- end Dashboard Menu -->


                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('permissions.index')}}">
                        <i class="fa fa-lock"></i> <span data-key="t-dashboards">الصلاحيات</span>
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




