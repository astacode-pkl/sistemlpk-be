<!DOCTYPE html>
<html lang="en">
  <head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Mordenize" />
    <meta name="author" content="" />
    <meta name="keywords" content="Mordenize" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('template/back') }}/dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{ asset('template/back') }}/dist/css/style.min.css" />
  </head>
  <body>
    <!-- Preloader -->
    <div class="preloader "style="display: flex; justify-content: center;">
        <iframe src="https://lottie.host/embed/d44cd16e-3d5d-439a-a3cf-82f79966d2d1/xL9AeMjQ3p.json"></iframe>
    </div>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
      <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
          <div class="row">
            <div class="col-xl-7 col-xxl-8">
              <a href="./index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                <img src="{{ asset('template/back') }}/dist/images/logos/dark-logo.svg" width="180" alt="">
              </a>
              <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                <img src="{{ asset('template/back') }}/dist/images/backgrounds/login-security.svg" alt="" class="img-fluid" width="500">
              </div>
            </div>
            <div class="col-xl-5 col-xxl-4">
              <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                <div class="col-sm-8 col-md-6 col-xl-9">
                  <h2 class="mb-3 fs-7 fw-bolder">Register</h2>
                  <p class=" mb-9">Create your account</p>
                  <form action="/register" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Name</label>
                      <input type="name" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-4">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-8 mb-4 rounded-2">Register</button>
                    <div class="d-flex align-items-center justify-content-center">
                      <p class="fs-4 mb-0 fw-medium">Back to </p>
                      <a class="text-primary fw-medium ms-2" href="/login">login</a>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    
    <!--  Import Js Files -->
    <script src="{{ asset('template/back') }}/dist/libs/jquery/dist/jquery.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/libs/simplebar/dist/simplebar.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!--  core files -->
    <script src="{{ asset('template/back') }}/dist/js/app.min.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/app.init.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/app-style-switcher.js"></script>
    <script src="{{ asset('template/back') }}/dist/js/sidebarmenu.js"></script>
    
    <script src="{{ asset('template/back') }}/dist/js/custom.js"></script>
  </body>
</html>