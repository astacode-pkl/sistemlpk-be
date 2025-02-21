<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/companyprofile/' . $companyprofile->logo_mark) }}" />

    <!-- CSS DataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

    <!-- Core Css -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link id="themeColors" rel="stylesheet" href="{{ asset('template/back') }}/dist/css/styles.css" />
    <link rel="stylesheet" href="{{ asset('template/back') }}/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">
    @stack('style')
    {{-- @vite('resources/css/app.css') --}}

    <title>{{ $companyprofile->namee }}</title>
    <!-- Owl Carousel  -->

</head>

<body>
    <!-- Preloader -->
    <div class="preloader "style="display: flex; justify-content: center;">
        <iframe src="https://lottie.host/embed/d44cd16e-3d5d-439a-a3cf-82f79966d2d1/xL9AeMjQ3p.json"></iframe>
    </div>

    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <aside class="left-sidebar with-vertical position-fixed">
            <div>
                <!-- ----------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ----------------------------------- -->
                <div class=" d-flex align-content-center justify-content-center overflow-hidden">
                    <div class="d-flex align-content-center justify-content-center w-100 p-2">
                        <a href="/cmslpktsukuba"><img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}" class=" w-100"
                                style="max-width: 135px;" /></a>
                    </div>
                    <a href="javascript:void(0)"
                        class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none align-self-center me-3">
                        <i class="ti ti-x"></i>
                    </a>
                </div>


                <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                    <ul id="sidebarnav">
                        <!-- ---------------------------------- -->
                        <!-- Home -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Dashboard</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba')) active @endif"
                                href="/cmslpktsukuba" aria-expanded="false">
                                <span>
                                    <i class="ti ti-home"></i>
                                </span>
                                <span class="hide-menu">Home</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Data -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Data</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Categories -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/categories')) active @endif"
                                href="/cmslpktsukuba/categories" aria-expanded="false">
                                <span>
                                    <i class="ti ti-list-details"></i>
                                </span>
                                <span class="hide-menu">Categories</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Gallery -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/galleries')) active @endif"
                                href="/cmslpktsukuba/galleries" aria-expanded="false">
                                <span>
                                    <i class="ti ti-photo"></i>
                                </span>
                                <span class="hide-menu">Galleries</span>
                            </a>

                            <!-- ---------------------------------- -->
                            <!-- Programs -->
                            <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link 
                        @if (request()->is(['cmslpktsukuba/programs', 'cmslpktsukuba/programs/create'])) active @endif"
                                href="/cmslpktsukuba/programs" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout"></i>
                                </span>
                                <span class="hide-menu">Programs</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Regulations -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/regulations')) active @endif"
                                href="/cmslpktsukuba/regulations" aria-expanded="false">
                                <span>
                                    <i class="ti ti-book"></i>
                                </span>
                                <span class="hide-menu">Regulations</span>
                            </a>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Benefits -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/benefits')) active @endif"
                                href="/cmslpktsukuba/benefits" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-chart-pie"></i>
                                </span>
                                <span class="hide-menu">Benefits</span>
                            </a>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- heroes -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/heroes')) active @endif"
                                href="/cmslpktsukuba/heroes" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-slideshow"></i>
                                </span>
                                <span class="hide-menu">Heroes</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Setting -->
                        <!-- ---------------------------------- -->
                        <li class="nav-small-cap">
                            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                            <span class="hide-menu">Setting</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Company Profile -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/companyprofile')) active @endif"
                                href="/cmslpktsukuba/companyprofile" aria-expanded="false">
                                <span>
                                    <i class="ti ti-id-badge"></i>
                                </span>
                                <span class="hide-menu">Company Profile</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link @if (request()->is('cmslpktsukuba/loghistories')) active @endif"
                                href="/cmslpktsukuba/loghistories" aria-expanded="false">
                                <span>
                                    <i class="ti ti-history"></i>
                                </span>
                                <span class="hide-menu">Log Histories</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <header class="topbar">
                <div class="with-vertical">
                    <!-- ---------------------------------- -->
                    <!-- Start Vertical Layout Header -->
                    <!-- ---------------------------------- -->
                    <nav class="navbar navbar-expand-lg p-0">
                        <ul class="navbar-nav">
                            <li class="nav-item nav-icon-hover-bg rounded-circle ms-n2">
                                <a class="nav-link sidebartoggler" id="headerCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            {{-- search --}}
                            {{-- <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                                <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="ti ti-search"></i>
                                </a>
                            </li> --}}
                            <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex position-relative">
                                <a class="nav-link" href="/cmslpktsukuba/inbox">
                                    <i class="ti ti-inbox position-relative"></i>
                                </a>
                                @if (Session::get('countUnread') > 0)
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"
                                        style="font-size: 0.6rem ;">
                                        {{ Session::get('countUnread') }}
                                    </span>
                                @endif
                            </li>
                        </ul>


                        <div class="d-block d-lg-none py-4">
                            <a href="/cmslpktsukuba/" class="text-nowrap logo-img">
                                <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}" width="90%"
                                    style="max-width:70px;" />
                            </a>
                        </div>
                        <div class="ms-lg-auto justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between">


                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">

                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img overflow-hidden">
                                                    <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}"
                                                        class="rounded-circle border img-fluid " width="40rem" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}"
                                                        class="rounded-circle img-fluid w-30" alt="logo" />
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">{{ auth()->user()->name }}</h5>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <form action="/logout" method="post">
                                                    <div class="d-grid py-4 px-7 pt-8">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Log
                                                            Out</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <!-- ---------------------------------- -->
                    <!-- End Vertical Layout Header -->
                    <!-- ---------------------------------- -->

                    <!-- ------------------------------- -->
                    <!-- apps Dropdown in Small screen -->
                    <!-- ------------------------------- -->
                    <!--  Mobilenavbar -->
                </div>
                <div class="app-header with-horizontal">
                    <nav class="navbar navbar-expand-xl container-fluid p-0">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item nav-icon-hover-bg rounded-circle d-flex d-xl-none ms-n2">
                                <a class="nav-link sidebartoggler" id="sidebarCollapse" href="javascript:void(0)">
                                    <i class="ti ti-menu-2"></i>
                                </a>
                            </li>
                            <li class="nav-item d-none d-xl-block">
                                <a href="/cmslpktsukuba" class="text-nowrap nav-link">
                                    <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}" class="img-fluid"
                                        width="100" alt="Image-logo" />
                                </a>
                            </li>

                            <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex position-relative">
                                <a class="nav-link" href="/cmslpktsukuba/inbox">
                                    <i class="ti ti-inbox position-relative"></i>
                                </a>
                                @if (Session::get('countUnread') > 0)
                                    <span
                                        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"
                                        style="font-size: 0.6rem ;">
                                        {{ Session::get('countUnread') }}
                                    </span>
                                @endif
                            </li>
                        </ul>
                        <div class="d-block d-xl-none">
                            <a href="/cmslpktsukuba/" class="text-nowrap nav-link">
                                <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}" width="90"
                                    alt="Image-logo" />
                            </a>
                        </div>
                        <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0"
                            href="javascript:void(0)" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="p-2">
                                <i class="ti ti-dots fs-7"></i>
                            </span>
                        </a>
                        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                            <div class="d-flex align-items-center justify-content-between px-0 px-xl-8">
                                <a href="javascript:void(0)"
                                    class="nav-link round-40 p-1 ps-0 d-flex d-xl-none align-items-center justify-content-center"
                                    type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
                                    aria-controls="offcanvasWithBothOptions">
                                    <i class="ti ti-align-justified fs-7"></i>
                                </a>
                                <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                                    <!-- ------------------------------- -->
                                    <!-- start Night Mode Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item nav-icon-hover-bg rounded-circle">
                                        <a class="nav-link moon dark-layout" href="javascript:void(0)">
                                            <i class="ti ti-moon moon"></i>
                                        </a>
                                        <a class="nav-link sun light-layout" href="javascript:void(0)">
                                            <i class="ti ti-sun sun"></i>
                                        </a>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end Night Mode Dropdown -->
                                    <!-- ------------------------------- -->


                                    <!-- ------------------------------- -->
                                    <!-- start profile Dropdown -->
                                    <!-- ------------------------------- -->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link pe-0" href="javascript:void(0)" id="drop1"
                                            aria-expanded="false">
                                            <div class="d-flex align-items-center">
                                                <div class="user-profile-img">
                                                    <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}"
                                                        class="rounded-circle" width="auto" height="50"
                                                        alt="" />
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                                            aria-labelledby="drop1">
                                            <div class="profile-dropdown position-relative" data-simplebar>
                                                <div class="py-3 px-7 pb-0">
                                                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                                                </div>
                                                <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                                                    <img src="{{ asset('images/companyprofile/' . $companyprofile->logo) }}"
                                                        class="rounded-circle img-fluid w-30" alt="logo" />
                                                    <div class="ms-3">
                                                        <h5 class="mb-1 fs-3">{{ Auth::user()->name }}</h5>
                                                        <p class="mb-0 d-flex align-items-center gap-2">
                                                            <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                                                        </p>
                                                    </div>
                                                </div>

                                                <form action="/logout" method="post">
                                                    <div class="d-grid py-4 px-7 pt-8">
                                                        @csrf
                                                        <button type="submit" class="btn btn-primary">Log
                                                            Out</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!-- ------------------------------- -->
                                    <!-- end profile Dropdown -->
                                    <!-- ------------------------------- -->
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
            <!--  Header End -->
            <aside class="left-sidebar with-horizontal position-sticky mb-5">
                <!-- Sidebar scroll-->
                <div>
                    <!-- Sidebar navigation-->
                    <nav id="sidebarnavh" class="sidebar-nav scroll-sidebar container-fluid">
                        <ul id="sidebarnav">

                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/cmslpktsukuba">
                                    <span>
                                        <i class="ti ti-home"></i>
                                    </span>
                                    <span class="hide-menu">Home</span>
                                </a>
                            </li>
                            <!-- ============================= -->
                            <!-- Data -->
                            <!-- ============================= -->
                            <li class="nav-small-cap">
                                <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                <span class="hide-menu">Data</span>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link two-column has-arrow" href="javascript:void(0)"
                                    aria-expanded="false">
                                    <span>
                                        <i class="ti ti-archive"></i>
                                    </span>
                                    <span class="hide-menu">Data</span>
                                </a>
                                <ul aria-expanded="false" class="collapse first-level">
                                    <li class="sidebar-item">
                                        <a href="/cmslpktsukuba/categories" class="sidebar-link">
                                            <i class="ti ti-list-details"></i>
                                            <span class="hide-menu">Categories</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/cmslpktsukuba/galleries" class="sidebar-link">
                                            <i class="ti ti-photo"></i>
                                            <span class="hide-menu">Galleries</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/programs" class="sidebar-link">
                                            <i class="ti ti-layout"></i>
                                            <span class="hide-menu">Programs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/cmslpktsukuba/regulations" class="sidebar-link">
                                            <i class="ti ti-book"></i>
                                            <span class="hide-menu">Regulations</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/programs" class="sidebar-link">
                                            <i class="ti ti-layout"></i>
                                            <span class="hide-menu">Programs</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="/cmslpktsukuba/benefits" class="sidebar-link">
                                            <i class="ti ti-chart-pie"></i>
                                            <span class="hide-menu">Benefits</span>
                                        </a>
                                    </li>
                                    <li class="sidebar-item">
                                        <a href="cmslpktsukuba/heroes" class="sidebar-link">
                                            <i class="ti ti-slideshow"></i>
                                            <span class="hide-menu">Heroes</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- =================== -->
                            <!-- Dashboard -->
                            <!-- =================== -->
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/cmslpktsukuba/companyprofile">
                                    <span>
                                        <i class="ti ti-id-badge"></i>
                                    </span>
                                    <span class="hide-menu">Company Profile</span>
                                </a>
                            </li>
                            <li class="sidebar-item">
                                <a class="sidebar-link" href="/cmslpktsukuba/loghitories">
                                    <span>
                                        <i class="ti ti-history"></i>
                                    </span>
                                    <span class="hide-menu">Log Histories</span>
                                </a>
                            </li>


                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->

            </aside>


            <div class="body-wrapper">
                <div class="max-width mx-4">
                    <div class="container-fluid">
                        @yield('content')
                    </div>
                </div>
            </div>
            <script>
                function handleColorTheme(e) {
                    document.documentElement.setAttribute("data-color-theme", e);
                }
            </script>
            <button
                class="btn btn-primary p-3 rounded-circle d-flex align-items-center justify-content-center customizer-btn"
                type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
                aria-controls="offcanvasExample">
                <i class="icon ti ti-settings fs-7"></i>
            </button>

            <div class="offcanvas customizer offcanvas-end" tabindex="-1" id="offcanvasExample"
                aria-labelledby="offcanvasExampleLabel">
                <div class="d-flex align-items-center justify-content-between p-3 border-bottom">
                    <h4 class="offcanvas-title fw-semibold" id="offcanvasExampleLabel">
                        Settings
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-n80" data-simplebar>
                    <h6 class="fw-semibold fs-4 mb-2">Theme</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check light-layout" name="theme-layout" id="light-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="light-layout">
                            <i class="icon ti ti-brightness-up fs-7 me-2"></i>Light
                        </label>

                        <input type="radio" class="btn-check dark-layout" name="theme-layout" id="dark-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary rounded-2" for="dark-layout">
                            <i class="icon ti ti-moon fs-7 me-2"></i>Dark
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Direction</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="direction-l" id="ltr-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="ltr-layout">
                            <i class="icon ti ti-text-direction-ltr fs-7 me-2"></i>LTR
                        </label>

                        <input type="radio" class="btn-check" name="direction-l" id="rtl-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="rtl-layout">
                            <i class="icon ti ti-text-direction-rtl fs-7 me-2"></i>RTL
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Theme Colors</h6>

                    <div class="d-flex flex-row flex-wrap gap-3 customizer-box color-pallete" role="group">
                        <input type="radio" class="btn-check" name="color-theme-layout" id="Blue_Theme"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Blue_Theme')" for="Blue_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="BLUE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-1">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Aqua_Theme"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Aqua_Theme')" for="Aqua_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="AQUA_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-2">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="Purple_Theme"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Purple_Theme')" for="Purple_Theme" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="PURPLE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-3">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="green-theme-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Green_Theme')" for="green-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GREEN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-4">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="cyan-theme-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Cyan_Theme')" for="cyan-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="CYAN_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-5">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>

                        <input type="radio" class="btn-check" name="color-theme-layout" id="orange-theme-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary d-flex align-items-center justify-content-center"
                            onclick="handleColorTheme('Orange_Theme')" for="orange-theme-layout"
                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="ORANGE_THEME">
                            <div
                                class="color-box rounded-circle d-flex align-items-center justify-content-center skin-6">
                                <i class="ti ti-check text-white d-flex icon fs-5"></i>
                            </div>
                        </label>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Layout Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="vertical-layout"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="vertical-layout">
                                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Vertical
                            </label>
                        </div>
                        <div>
                            <input type="radio" class="btn-check" name="page-layout" id="horizontal-layout"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="horizontal-layout">
                                <i class="icon ti ti-layout-navbar fs-7 me-2"></i>Horizontal
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Container Option</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="layout" id="boxed-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="boxed-layout">
                            <i class="icon ti ti-layout-distribute-vertical fs-7 me-2"></i>Boxed
                        </label>

                        <input type="radio" class="btn-check" name="layout" id="full-layout"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="full-layout">
                            <i class="icon ti ti-layout-distribute-horizontal fs-7 me-2"></i>Full
                        </label>
                    </div>

                    <h6 class="fw-semibold fs-4 mb-2 mt-5">Sidebar Type</h6>
                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <a href="javascript:void(0)" class="fullsidebar">
                            <input type="radio" class="btn-check" name="sidebar-type" id="full-sidebar"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="full-sidebar">
                                <i class="icon ti ti-layout-sidebar-right fs-7 me-2"></i>Full
                            </label>
                        </a>
                        <div>
                            <input type="radio" class="btn-check " name="sidebar-type" id="mini-sidebar"
                                autocomplete="off" />
                            <label class="btn p-9 btn-outline-primary" for="mini-sidebar">
                                <i class="icon ti ti-layout-sidebar fs-7 me-2"></i>Collapse
                            </label>
                        </div>
                    </div>

                    <h6 class="mt-5 fw-semibold fs-4 mb-2">Card With</h6>

                    <div class="d-flex flex-row gap-3 customizer-box" role="group">
                        <input type="radio" class="btn-check" name="card-layout" id="card-with-border"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="card-with-border">
                            <i class="icon ti ti-border-outer fs-7 me-2"></i>Border
                        </label>

                        <input type="radio" class="btn-check" name="card-layout" id="card-without-border"
                            autocomplete="off" />
                        <label class="btn p-9 btn-outline-primary" for="card-without-border">
                            <i class="icon ti ti-border-none fs-7 me-2"></i>Shadow
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="dark-transparent sidebartoggler"></div>
    <script src="{{ asset('template/back') }}/dist/js/vendor.min.js"></script>
    <!-- Import Js Files -->

    <script src="{{ asset('template/back') }}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/theme/app.init.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/theme/theme.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/script.js"></script>
    {{-- My javascript --}}
    <script src="{{ asset('js/script.js') }}"></script>
    {{-- My javascript --}}
    <script src="{{ asset('template/back') }}/dist/js/theme/app.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/theme/sidebarmenu.js"></script>

    <script src="{{ asset('template/back') }}/dist/js/plugins/mindmup-editabletable.js"></script>
    <script src="{{ asset('template/back') }}/dist/libs/vanilla-datatables-editable/datatable.editable.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/plugins/numeric-input-example.js"></script>


    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js">
    </script>
    {{-- <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/apexcharts/dist/apexcharts.min.js">
    </script> --}}
    {{-- <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/dashboards/dashboard.js"></script> --}}

    @stack('script')
</body>

</html
