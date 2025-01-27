
<aside class="left-sidebar with-vertical position-fixed">
            <div><!-- ---------------------------------- -->
                <!-- Start Vertical Layout Sidebar -->
                <!-- ---------------------------------- -->
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a href="/">
                        <img src="{{ asset('storage') }}/{{ Cache::get('logo') }}" width="90%"/>
                       
                    </a>
                    <a href="javascript:void(0)"
                        class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
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
                            <span class="hide-menu">DashBoard</span>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Dashboard -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="" id="get-url" aria-expanded="false">
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
                            <a class="sidebar-link" href="/categories" aria-expanded="false">
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
                            <a class="sidebar-link" href="/galleries" aria-expanded="false">
                                <span>
                                    <i class="ti ti-photo"></i>
                                </span>
                                <span class="hide-menu">Galleries</span>
                            </a>
                        </li>
                        
                        <!-- ---------------------------------- -->
                        <!-- Profile -->
                        <!-- ---------------------------------- -->
                      

                        <!-- ---------------------------------- -->
                        <!-- Regulations -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/regulations" aria-expanded="false">
                                <span>
                                    <i class="ti ti-book"></i>
                                </span>
                                <span class="hide-menu">Regulations</span>
                            </a>
                        </li>

                        <!-- ---------------------------------- -->
                        <!-- Programs -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/programs" aria-expanded="false">
                                <span>
                                    <i class="ti ti-layout"></i>
                                </span>
                                <span class="hide-menu">Programs</span>
                            </a>
                        </li>
                        <!-- ---------------------------------- -->
                        <!-- Benefits -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/benefits" aria-expanded="false">
                                <span class="d-flex">
                                    <i class="ti ti-chart-pie"></i>
                                  </span>
                                <span class="hide-menu">Benefits</span>
                            </a>
                        </li>
                         <!-- ---------------------------------- -->
                        <!-- Company Profile -->
                        <!-- ---------------------------------- -->
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="/companyprofile" aria-expanded="false">
                                <span>
                                    <i class="ti ti-id-badge"></i>
                                </span>
                                <span class="hide-menu">Company Profile</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>