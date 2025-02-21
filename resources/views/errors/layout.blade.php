<!DOCTYPE html>
<html lang="en">

<head>
    <!--  Title -->
    <title>{{ $companyProfile->name }}</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Core Css -->
    <link id="themeColors" rel="stylesheet" href="{{ asset('template/back') }}/dist/css/style.min.css" />
</head>

<body>
    <!-- Preloader -->
    <div class="preloader "style="display: flex; justify-content: center;">
        <iframe src="https://lottie.host/embed/d44cd16e-3d5d-439a-a3cf-82f79966d2d1/xL9AeMjQ3p.json"></iframe>
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div class="position-relative overflow-hidden min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-lg-4">
                        <div class="text-center">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--  Import Js Files -->
    <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/custom.js"></script>
</body>

</html>
