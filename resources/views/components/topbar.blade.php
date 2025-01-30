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
                    <a class="nav-link" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#exampleModal" >
                        <i class="ti ti-search"></i>
                    </a>
                </li>
                <li class="nav-item nav-icon-hover-bg rounded-circle d-none d-lg-flex position-relative">
                    <a class="nav-link" href="/inbox">
                        <i class="ti ti-inbox position-relative"></i>
                    </a>
                    @if (Session::get('countUnread') > 0)
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary" style="font-size: 0.6rem ;">
                            {{ Session::get('countUnread') }}
                        </span>
                        
                    @endif
                </li>
            </ul>


            <div class="d-block d-lg-none py-4">
                <a href="/" class="text-nowrap logo-img">
                    <img src="{{asset('images/companyprofile/'.$logo)  }}" width="90%"  style="max-width:70px;"/>
                </a>
            </div>
            <div class="ms-lg-auto justify-content-end" id="navbarNav">
                <div class="d-flex align-items-center justify-content-between">


                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
                        {{-- ------------------------------- --> --}}
                        <!-- ------------------------------- -->
                        <!-- start language Dropdown -->
                        <!-- ------------------------------- -->

                        <!-- ------------------------------- -->
                        <!-- end language Dropdown -->
                        <!-- ------------------------------- -->
                        <!-- ------------------------------- -->
                        <!-- start profile Dropdown -->
                        <!-- ------------------------------- -->
                        <li class="nav-item dropdown">
                            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" aria-expanded="false">
                                <div class="d-flex align-items-center">
                                    <div class="user-profile-img overflow-hidden"  >
                                        <img src="{{asset('images/companyprofile/'.$logo)  }}" class="rounded-circle border img-fluid " width="40" height="40" />
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
                                        <img src="{{asset('images/companyprofile/'.$logo)  }}"
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
    
</header>
<!--  Search Bar -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class="modal-content rounded-1">
            <div class="modal-header border-bottom">
                <input type="search" class="form-control fs-3" placeholder="Search here" id="search_pages" />
                <a href="javascript:void(0)" data-bs-dismiss="modal" class="lh-1">
                    <i class="ti ti-x fs-5 ms-3"></i>
                </a>
            </div>
            <div class="modal-body message-body" data-simplebar="" id="container_pages">
                <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
                <ul class="list mb-0 py-2">
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/">
                            <span class="d-block">Home</span>
                            <span class="text-muted d-block">/home</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/categories">
                            <span class="d-block">Categories</span>
                            <span class="text-muted d-block">/categories</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/inbox">
                            <span class="d-block">Inbox</span>
                            <span class="text-muted d-block">/inbox</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/galleries">
                            <span class="d-block">Galleries</span>
                            <span class="text-muted d-block">/galleries</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/regulations">
                            <span class="d-block">Regulations</span>
                            <span class="text-muted d-block">/regulations</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/programs">
                            <span class="d-block">Programs</span>
                            <span class="text-muted d-block">/programs</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/benefits">
                            <span class="d-block">Benefits</span>
                            <span class="text-muted d-block">/benefits</span>
                        </a>
                    </li>
                    <li class="p-1 mb-1 bg-hover-light-black">
                        <a href="/companyprofile">
                            <span class="d-block">Company Profile</span>
                            <span class="text-muted d-block">/companyprofile</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



