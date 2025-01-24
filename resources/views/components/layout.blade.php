
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/png" href="" />

    <!-- Core Css -->
    <!-- <link rel="stylesheet" href="https://bootstrapdemos.adminmart.com/modernize/dist/assets/css/styles.css" /> -->
    {{-- <link rel="stylesheet" href="{{ asset('template/back') }}/dist/css/style.min.css" /> --}}
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <link id="themeColors" rel="stylesheet" href="{{ asset('template/back') }}/dist/css/styles.css" />


    <link rel="stylesheet" href="{{ asset('template/back') }}/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css">

    <title>Modernize Bootstrap Admin</title>
    
    <!-- Owl Carousel  -->

</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/logos/favicon.png" alt="loader" class="lds-ripple img-fluid" />
    </div>
    
    <div id="main-wrapper">
        <!-- Sidebar Start -->
        <x-sidebar></x-sidebar>
        <!--  Sidebar End -->
        <div class="page-wrapper">
            <!--  Header Start -->
            <x-topbar></x-topbar>
            <!--  Header End -->
            <x-sidebarhorizontal></x-sidebarhorizontal>

            <div class="body-wrapper">
                <div class="container-fluid">
                  {{ $slot }}
                </div>
            </div>
            <script>
                function handleColorTheme(e)
                {
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
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body h-n80" data-simplebar>



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
                            onclick="handleColorTheme('Green_Theme')" for="green-theme-layout" data-bs-toggle="tooltip"
                            data-bs-placement="top" data-bs-title="GREEN_THEME">
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
        <script src="{{ asset('template/back') }}/dist/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="{{ asset('template/back') }}/dist/libs/vanilla-datatables-editable/datatable.editable.min.js"></script>

         <script src="{{ asset('template/back') }}/dist/js/plugins/numeric-input-example.js"></script>
          
         
         <!-- Tambahkan CSS DataTables -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">

        <script>
            
        $(document).ready(function () {
          $('#datatable').DataTable({
              // Konfigurasi tambahan (opsional)
              paging: true, // Menampilkan paginasi
              searching: true, // Menampilkan kolom pencarian
              ordering: true, // Menampilkan sorting kolom
              info: true // Menampilkan informasi jumlah data
          });
        });  
      const textarea = document.getElementById('floatingTextarea');
            textarea.addEventListener('input' , function(){
                textarea.style.height = '';
                textarea.style.height = textarea.scrollHeight + 'px'
            });
            
        </script>
    
    {{-- alert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- solar icons -->
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
    <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
    <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/dashboards/dashboard.js"></script>
</body>

</html>

