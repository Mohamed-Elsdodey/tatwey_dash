<!-- ========== App Menu ========== -->

<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('admin.index')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="22">
                    </span>
            <span class="logo-lg">
                        <img src="{{get_file(setting()->logo_header)}}" alt="" height="40">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('admin.index')}}" class="logo logo-light">
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
                    <a class="nav-link menu-link" href="{{route('admin.index')}}">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">لوحة التحكم</span>
                    </a>
                </li> <!-- end Dashboard Menu -->




                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('admins.index')}}">
                        <i class="fa fa-user-secret"></i> <span data-key="t-dashboards">الاشراف</span>
                    </a>
                </li> <!-- end Dashboard Menu -->




                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('categories.index')}}">
                        <i class="fa fa-book"></i> <span data-key="t-dashboards">المواد الدراسية</span>
                    </a>
                </li> <!-- end Dashboard Menu -->




                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('rows.index')}}">
                        <i class="fa fa-school"></i> <span data-key="t-dashboards">الصفوف الدراسية</span>
                    </a>
                </li> <!-- end Dashboard Menu -->



                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('settings.index')}}">
                        <i class="fas fa-chalkboard-teacher"></i> <span data-key="t-dashboards"> الاعدادات</span>
                    </a>
                </li> 
                <!-- end Dashboard Menu -->
                 <!-- start AE dropdown -->
                  <!-- 1 -->
                <li class="nav-item">
                    <div class="AE_dropdown">
                    <a class="nav-link menu-link AE_dropdown-toggle" href="#!" id="AE_dropdownMenuButton">
                        <i class="fa fa-school"></i> <span data-key="t-dashboards">الصفوف الدراسية</span>
                        <i class="fa-solid fa-angle-left  AE_DropDownArrow"></i>   
                    </a>
                        <ul class="AE_dropdown-menu " aria-labelledby="AE_dropdownMenuButton">    
                            <li><a class="AE_dropdown-item" href="#">اضافة</a></li>
                            <li><a class="AE_dropdown-item" href="#"> الاعدادات </a></li>
                            <li><a class="AE_dropdown-item" href="#"> اضافة طالب  </a></li>
                        </ul>
                        
                    </div>
                </li>
                <!-- 2 -->
                <li class="nav-item">
                    <div class="AE_dropdown">
                    <a class="nav-link menu-link AE_dropdown-toggle" href="#!" id="AE_dropdownMenuButton2">
                        <i class="fa fa-school"></i> <span data-key="t-dashboards">الصفوف الدراسية</span>
                        <i class="fa-solid fa-angle-left  AE_DropDownArrow"></i>   
                    </a>
                        <ul class="AE_dropdown-menu " aria-labelledby="AE_dropdownMenuButton2">    
                            <li><a class="AE_dropdown-item" href="#">Action</a></li>
                            <li><a class="AE_dropdown-item" href="#">Another action</a></li>
                            <li><a class="AE_dropdown-item" href="#">Something else here</a></li>
                        </ul>
                        
                    </div>
                </li>
            <!-- end  AE dropdown -->














            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->


<div class="vertical-overlay"></div>




