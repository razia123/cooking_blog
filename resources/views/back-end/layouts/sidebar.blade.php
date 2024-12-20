<!-- Start::app-sidebar -->
<aside class="app-sidebar sticky" id="sidebar">

    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header">
        <a href="{{ route('dashboard') }}" class="header-logo">
            <img src="{{ asset("front-end/img/core-img/logo.png") }}" alt="logo" class="desktop-logo rounded-pill">
            <img src="../assets/images/brand-logos/toggle-logo.png" alt="logo" class="toggle-logo">
            <img src="{{ asset("front-end/img/core-img/logo.png") }}" width="100%" alt="logo"
                class="desktop-dark rounded-pill">
            <img src="../assets/images/brand-logos/toggle-dark.png" alt="logo" class="toggle-dark">
        </a>
        {{-- <p class="text-white mt-3 ms-2">Razia Haque</p> --}}

    </div>

    <!-- End::main-sidebar-header -->

    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll">

        <!-- Start::nav -->
        <nav class="main-menu-container nav nav-pills flex-column sub-open">
            <div class="slide-left" id="slide-left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path>
                </svg>
            </div>
            <ul class="main-menu">
                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Main</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('dashboard') }}" class="side-menu__item">
                        <i class="bx bx-home side-menu__icon"></i>
                        <span class="side-menu__label">Dashboards</span>
                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="{{ route('profile') }}" class="side-menu__item">
                        <i class="bx bxs-user-account side-menu__icon"></i>
                        <span class="side-menu__label">Profile</span>
                    </a>
                </li>
                <!-- End::slide -->
                <li class="slide__category"><span class="category-name">USERS</span></li>
                <li class="slide has-sub">
                    <a href="" class="side-menu__item">
                        <i class="bx bx-user side-menu__icon"></i>
                        <span class="side-menu__label">Users</span>

                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="" class="side-menu__item">
                        <i class="bx bx-user-plus side-menu__icon"></i>
                        <span class="side-menu__label">Create User</span>
                
                    </a>
                </li>

                <!-- Start::slide__category -->
                <li class="slide__category"><span class="category-name">Posts</span></li>
                <!-- End::slide__category -->

                <!-- Start::slide -->
                <li class="slide has-sub">
                    <a href="{{ route('category.index') }}" class="side-menu__item">
                        <i class="bx bx-category side-menu__icon"></i>
                        <span class="side-menu__label">Category</span>

                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="{{ route('tag.index') }}" class="side-menu__item">
                        <i class="bx bx-tag side-menu__icon"></i>
                        <span class="side-menu__label">Tag</span>

                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="{{ route('slide.index') }}" class="side-menu__item">
                        <i class="bx bx-slider side-menu__icon"></i>
                        <span class="side-menu__label">Slide</span>
                
                    </a>
                </li>
                <li class="slide has-sub">
                    <a href="{{ route('post.index') }}" class="side-menu__item">
                        <i class="bx bx-cog side-menu__icon"></i>
                        <span class="side-menu__label">Posts</span>

                    </a>
                </li>
                <!-- End::slide -->
            </ul>
            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path>
                </svg></div>
        </nav>
        <!-- End::nav -->

    </div>
    <!-- End::main-sidebar -->

</aside>
<!-- End::app-sidebar -->