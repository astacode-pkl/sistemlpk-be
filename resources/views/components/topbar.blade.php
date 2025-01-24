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
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex">
                    <a class="nav-link" href="/inbox">
                        <i class="ti ti-inbox"></i>
                    </a>
                </li>
            </ul>


            <div class="d-block d-lg-none py-4">
                <a href="../main/index.html" class="text-nowrap logo-img">
                    <img src="{{ asset('storage') }}/{{ Cache::get('logo') }}" width="90%" />
                </a>
            </div>
            <div class="ms-lg-auto justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">


                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        {{-- ------------------------------- --> --}}
                        <!-- ------------------------------- -->
                        <!-- start language Dropdown -->
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
                        <!-- end language Dropdown -->
                        <!-- ------------------------------- -->
                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        <img src="{{ asset('storage') }}/{{ Cache::get('logo') }}"
                                            class="rounded-circle border" width="35" height="35"
                                            alt="modernize-img" />
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
                                        <img src="{{ asset('storage') }}/{{ Cache::get('logo') }}"
                                            class="rounded-circle" width="80" height="80" alt="modernize-img" />
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
                                            <button type="submit" class="btn btn-outline-primary">Log Out</button>
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
                    <a href="../main/index.html" class="text-nowrap nav-link">
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/dark-logo.svg"
                            class="dark-logo" width="180" alt="modernize-img" />
                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/light-logo.svg"
                            class="light-logo" width="180" alt="modernize-img" />
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-xl-flex">
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        <i class="ti ti-search"></i>
                    </a>
                </li>
            </ul>
            <ul class="navbar-nav quick-links d-none d-xl-flex align-items-center">
                <!-- ------------------------------- -->
                <!-- start apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item nav-icon-hover-bg rounded w-auto dropdown d-none d-lg-flex">
                    <div class="hover-dd">
                        <a class="nav-link" href="javascript:void(0)">
                            Apps<span class="mt-1">
                                <i class="ti ti-chevron-down fs-3"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-nav dropdown-menu-animate-up py-0">
                            <div class="row">
                                <div class="col-8">
                                    <div class="ps-7 pt-7">
                                        <div class="border-bottom">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../main/app-chat.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-chat.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Chat Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">New
                                                                    messages arrived</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-invoice.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-invoice.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">Invoice
                                                                    App</h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    latest invoice</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-contact2.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-mobile.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">2
                                                                    Unsaved Contacts</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-email.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-message-box.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">Email App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    new emails</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="position-relative">
                                                        <a href="../main/page-user-profile.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-cart.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    User Profile
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">learn
                                                                    more information</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-calendar.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-date.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Calendar App
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Get
                                                                    dates</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-contact.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-lifebuoy.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Contact List Table
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">Add
                                                                    new contact</span>
                                                            </div>
                                                        </a>
                                                        <a href="../main/app-notes.html"
                                                            class="d-flex align-items-center pb-9 position-relative">
                                                            <div
                                                                class="text-bg-light rounded-1 me-3 p-6 d-flex align-items-center justify-content-center">
                                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-dd-application.svg"
                                                                    alt="modernize-img" class="img-fluid"
                                                                    width="24" height="24" />
                                                            </div>
                                                            <div>
                                                                <h6 class="mb-1 fw-semibold fs-3">
                                                                    Notes Application
                                                                </h6>
                                                                <span class="fs-2 d-block text-body-secondary">To-do
                                                                    and Daily tasks</span>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row align-items-center py-3">
                                            <div class="col-8">
                                                <a class="fw-semibold d-flex align-items-center lh-1"
                                                    href="javascript:void(0)">
                                                    <i class="ti ti-help fs-6 me-2"></i>Frequently Asked
                                                    Questions
                                                </a>
                                            </div>
                                            <div class="col-4">
                                                <div class="d-flex justify-content-end pe-4">
                                                    <button class="btn btn-primary">Check</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4 ms-n4">
                                    <div class="position-relative p-7 border-start h-100">
                                        <h5 class="fs-5 mb-9 fw-semibold">Quick Links</h5>
                                        <ul class="">
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/page-pricing.html">Pricing Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/authentication-login.html">Authentication
                                                    Design</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/authentication-register.html">Register
                                                    Now</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/authentication-error.html">404 Error
                                                    Page</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/app-notes.html">Notes App</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/page-user-profile.html">User
                                                    Application</a>
                                            </li>
                                            <li class="mb-3">
                                                <a class="fw-semibold bg-hover-primary"
                                                    href="../main/page-account-settings.html">Account
                                                    Settings</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ------------------------------- -->
                <!-- end apps Dropdown -->
                <!-- ------------------------------- -->
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="../main/app-chat.html">Chat</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="../main/app-calendar.html">Calendar</a>
                </li>
                <li class="nav-item dropdown-hover d-none d-lg-block">
                    <a class="nav-link" href="../main/app-email.html">Email</a>
                </li>
            </ul>
            <div class="d-block d-xl-none">
                <a href="../main/index.html" class="text-nowrap nav-link">
                    <img src="{{ asset('storage') }}/{{ Cache::get('logo') }}" width="180" alt="modernize-img" />
                </a>
            </div>
            <a class="navbar-toggler nav-icon-hover-bg rounded-circle p-0 mx-0 border-0" href="javascript:void(0)"
                data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
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

                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img">
                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg"
                                            class="rounded-circle" width="35" height="35"
                                            alt="modernize-img" />
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
                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/profile/user-1.jpg"
                                            class="rounded-circle" width="80" height="80"
                                            alt="modernize-img" />
                                        <div class="ms-3">
                                            <h5 class="mb-1 fs-3">Mathew Anderson</h5>
                                            <span class="mb-1 d-block">Designer</span>
                                            <p class="mb-0 d-flex align-items-center gap-2">
                                                <i class="ti ti-mail fs-4"></i> info@modernize.com
                                            </p>
                                        </div>
                                    </div>
                                    <div class="message-body">
                                        <a href="../main/page-user-profile.html"
                                            class="py-8 px-7 mt-8 d-flex align-items-center">
                                            <span
                                                class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-account.svg"
                                                    alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                                                <span class="fs-2 d-block text-body-secondary">Account
                                                    Settings</span>
                                            </div>
                                        </a>
                                        <a href="../main/app-email.html" class="py-8 px-7 d-flex align-items-center">
                                            <span
                                                class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-inbox.svg"
                                                    alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Inbox</h6>
                                                <span class="fs-2 d-block text-body-secondary">Messages &
                                                    Emails</span>
                                            </div>
                                        </a>
                                        <a href="../main/app-notes.html" class="py-8 px-7 d-flex align-items-center">
                                            <span
                                                class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                                                <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/svgs/icon-tasks.svg"
                                                    alt="modernize-img" width="24" height="24" />
                                            </span>
                                            <div class="w-100 ps-3">
                                                <h6 class="mb-1 fs-3 fw-semibold lh-base">My Task</h6>
                                                <span class="fs-2 d-block text-body-secondary">To-do and
                                                    Daily Tasks</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-grid py-4 px-7 pt-8">
                                        <div
                                            class="upgrade-plan bg-primary-subtle position-relative overflow-hidden rounded-4 p-4 mb-9">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="fs-4 mb-3 fw-semibold">Unlimited Access</h5>
                                                    <button class="btn btn-primary">Upgrade</button>
                                                </div>
                                                <div class="col-6">
                                                    <div class="m-n4 unlimited-img">
                                                        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/backgrounds/unlimited-bg.png"
                                                            alt="modernize-img" class="w-100" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="../main/authentication-login.html"
                                            class="btn btn-outline-primary">Log Out</a>
                                    </div>
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
<!--  Search Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
            <div class="modal-header border-bottom">
                <input type="search" class="form-control fs-3" placeholder="Search here" id="search" />
                <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                    <i class="ti ti-x fs-5 ms-3"></i>
                </a>
            </div>
            <div class="modal-body message-body" data-simplebar="">
                <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                <ul class="list mb-0 py-2">
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Modern</span>
                            <span class="text-muted d-block">/dashboards/dashboard1</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Dashboard</span>
                            <span class="text-muted d-block">/dashboards/dashboard2</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Contacts</span>
                            <span class="text-muted d-block">/apps/contacts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Posts</span>
                            <span class="text-muted d-block">/apps/blog/posts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Detail</span>
                            <span
                                class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Shop</span>
                            <span class="text-muted d-block">/apps/ecommerce/shop</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Modern</span>
                            <span class="text-muted d-block">/dashboards/dashboard1</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Dashboard</span>
                            <span class="text-muted d-block">/dashboards/dashboard2</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Contacts</span>
                            <span class="text-muted d-block">/apps/contacts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Posts</span>
                            <span class="text-muted d-block">/apps/blog/posts</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Detail</span>
                            <span
                                class="text-muted d-block">/apps/blog/detail/streaming-video-way-before-it-was-cool-go-dark-tomorrow</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="javascript:void(0)">
                            <span class="d-block">Shop</span>
                            <span class="text-muted d-block">/apps/ecommerce/shop</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--  Shopping Cart -->
<div class="offcanvas offcanvas-end shopping-cart" tabindex="-1" id="offcanvasRight"
    aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header justify-content-between py-4">
        <h5 class="offcanvas-title fs-5 fw-semibold" id="offcanvasRightLabel">
            Shopping Cart
        </h5>
        <span class="badge bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
    </div>
    <div class="offcanvas-body h-100 px-4 pt-0" data-simplebar>
        <ul class="mb-0">
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-1.jpg"
                        width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                    type="button" id="add1">
                                    -
                                </button>
                                <input type="text"
                                    class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                    placeholder="" aria-label="Example text with button addon"
                                    aria-describedby="add1" value="1" />
                                <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                    type="button" id="addo2">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-2.jpg"
                        width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                    type="button" id="add2">
                                    -
                                </button>
                                <input type="text"
                                    class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                    placeholder="" aria-label="Example text with button addon"
                                    aria-describedby="add2" value="1" />
                                <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                    type="button" id="addon34">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li class="pb-7">
                <div class="d-flex align-items-center">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/products/product-3.jpg"
                        width="95" height="75" class="rounded-1 me-9 flex-shrink-0" alt="modernize-img" />
                    <div>
                        <h6 class="mb-1">Supreme toys cooker</h6>
                        <p class="mb-0 text-muted fs-2">Kitchenware Item</p>
                        <div class="d-flex align-items-center justify-content-between mt-2">
                            <h6 class="fs-2 fw-semibold mb-0 text-muted">$250</h6>
                            <div class="input-group input-group-sm w-50">
                                <button class="btn border-0 round-20 minus p-0 bg-success-subtle text-success"
                                    type="button" id="add3">
                                    -
                                </button>
                                <input type="text"
                                    class="form-control round-20 bg-transparent text-muted fs-2 border-0 text-center qty"
                                    placeholder="" aria-label="Example text with button addon"
                                    aria-describedby="add3" value="1" />
                                <button class="btn text-success bg-success-subtle p-0 round-20 border-0 add"
                                    type="button" id="addon3">
                                    +
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="align-bottom">
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Sub Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$2530</span>
                </div>
            </div>
            <div class="d-flex align-items-center pb-7">
                <span class="text-dark fs-3">Total</span>
                <div class="ms-auto">
                    <span class="text-dark fw-semibold fs-3">$6830</span>
                </div>
            </div>
            <a href="../main/eco-checkout.html" class="btn btn-outline-primary w-100">Go to shopping cart</a>
        </div>
    </div>
</div>
