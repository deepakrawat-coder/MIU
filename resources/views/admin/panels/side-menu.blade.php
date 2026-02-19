<!-- START SIDEBAR -->
<aside class="app-sidebar">
    <!-- START BRAND LOGO -->
    <div class="app-sidebar-logo px-6 justify-content-center align-items-center">
        <a href="index.html">
            <img height="35" class="app-sidebar-logo-default" alt="Logo" src="admin/assets/images/light-logo.png">
            <img height="40" class="app-sidebar-logo-minimize" alt="Logo" src="admin/assets/images/Favicon.png">
        </a>
    </div>
    <!-- END BRAND LOGO -->
    <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" id="sidebarMenu" aria-label="Main navigation">
        <ul class="main-menu" id="all-menu-items" role="menu">
            <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-dashboards">Dashboards</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="index.html" class="side-menu__item" role="menuitem"
                            data-lang="hr-dashboards-ecommerce">E-Commerce</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-project-management.html" data-lang="hr-dashboards-project-management"
                            class="side-menu__item" role="menuitem">Project Management</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-online-course.html" data-lang="hr-dashboards-online-course"
                            class="side-menu__item" role="menuitem">Online course</a>
                    </li>
                    <li class="slide">
                        <a href="dashboard-social-media.html" data-lang="hr-dashboards-social-media"
                            class="side-menu__item" role="menuitem">Social Media</a>
                    </li>
                </ul>
            </li>
            {{-- <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-layout-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-layout">Layout</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide">
                        <a href="demo-layout-horizontal.html" target="_blank" class="side-menu__item" role="menuitem"
                            data-lang="hr-layout-horizontal">Horizontal</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-two-column.html" target="_blank" class="side-menu__item" role="menuitem"
                            data-lang="hr-layout-two-column">Two Column</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-semibox.html" target="_blank" class="side-menu__item" role="menuitem"
                            data-lang="hr-layout-semibox">Semibox</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-compact.html" target="_blank" class="side-menu__item" role="menuitem"
                            data-lang="hr-layout-compact">Compact</a>
                    </li>
                    <li class="slide">
                        <a href="demo-layout-small-icon.html" target="_blank" class="side-menu__item" role="menuitem"
                            data-lang="hr-layout-small-icon">Small Icon</a>
                    </li>
                </ul>
            </li> --}}

            <li class="slide {{ Route::is('events.index') ? 'active' : '' }}">
                <a href="{{ route('events.index') }}" class="side-menu__item">
                    <span class="side_menu_icon"><i class="ri-calendar-event-line"></i></span>
                    <span class="side-menu__label">Events Category</span>
                </a>
            </li>

            <li class="slide {{ Route::is('posts.index') ? 'active' : '' }}">
                <a href="{{ route('posts.index') }}" class="side-menu__item">
                    <span class="side_menu_icon"><i class="ri-calendar-event-line"></i></span>
                    <span class="side-menu__label">Events Post</span>
                </a>
            </li>
            <li class="slide">
                <a href="#!" class="side-menu__item" role="menuitem">
                    <span class="side_menu_icon"><i class="ri-building-line"></i></span>
                    <span class="side-menu__label" data-lang="hr-school-dept">Manage</span>
                    <i class="ri-arrow-down-s-line side-menu__angle"></i>
                </a>
                <ul class="slide-menu" role="menu">
                    <li class="slide {{ Route::is('schools.index') ? 'active' : '' }}">
                        <a href="{{ route('schools.index') }}" class="side-menu__item" role="menuitem">
                            School / Department
                        </a>
                    </li>
                    <li class="slide {{ Route::is('courses.index') ? 'active' : '' }}">
                        <a href="{{ route('courses.index') }}" class="side-menu__item" role="menuitem">
                            Courses
                        </a>
                    </li>
                    <li class="slide {{ Route::is('programs.index') ? 'active' : '' }}">
                        <a href="{{ route('programs.index') }}" class="side-menu__item" role="menuitem">
                            Programs
                        </a>
                    </li>
                    <li class="slide {{ Route::is('specialization.index') ? 'active' : '' }}">
                        <a href="{{ route('specialization.index') }}" class="side-menu__item" role="menuitem">
                            Specialization
                        </a>
                    </li>
                </ul>
            </li>


        </ul>
    </nav>
</aside>
</div>
</div>