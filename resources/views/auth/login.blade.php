<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Hotelsstory</title>
  <!-- base:css -->
  <link rel="stylesheet" href="assets/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="assets/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- endinject -->
  <link rel="icon" type="image/svg" href="assets/img/gpl_favicon.svg"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center" >
            <div class="auth-form-transparent text-left p-3" style="margin-top: 50px;">
            
            <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="brand-logo">
                 <img src="assets/img/hs-logo.png" alt="Hotelsstory Logo">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
            </div>
            </div>
              @include('includes.status') 
              <form class="pt-3" action="{{url('login')}}" method="post">
                {{ csrf_field() }}
                <meta name="csrf-token" content="{{ csrf_token() }}" />
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username" name="email" required="required">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password" name="password" required="required">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                  <a href="{{url('forgot-password')}}" class="auth-link text-black">Forgot password?</a>
                </div>
                <div class="my-3">
                  <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="submit">LOGIN</button>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 ">
            <img style="" src="{{asset('assets/img/login-bg.jpg')}}" alt="logo">
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="assets/js/vendor.bundle.base.js"></script>
  <script src="assets/js/off-canvas.js"></script>
  <script src="assets/js/hoverable-collapse.js"></script>
  <script src="assets/js/template.js"></script>
  <script src="assets/js/settings.js"></script>
  <script src="assets/js/todolist.js"></script>
  <script src="assets/js/profile-settings.js"></script>

</body>

</html>
