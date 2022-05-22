<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hotelsstory</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/lightbox.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border position-relative text-primary" style="width: 6rem; height: 6rem;" role="status"></div>
        <i class="fa fa-laptop-code fa-2x text-primary position-absolute top-50 start-50 translate-middle"></i>
    </div>
    <!-- Spinner End -->


    <!-- Brand & Contact Start -->
    <div class="container-fluid pd-8 wow fadeIn" data-wow-delay="0.1s" style="background-color: #2f455c;">
        <div class="row align-items-center top-bar">
            <div class="col-lg-4 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">
                    <img src="{{asset('assets/img/Hotelsstory-white-logo.c2a701ec.svg')}}" alt="Logo" style="width: 100px;">
                </a>
            </div>
            <div class="col-lg-8 col-md-7 d-none d-lg-block">
                <div class="row">
                    
                    <div class="col-12">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="ps-3">
                                <p class="mb-2 mt-2 fs-15 wht">List your hotel</p>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2 mt-2 fs-15 pnk">Followers</p>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2 mt-2 fs-15 pnk">View hotel</p>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2 mt-2 fs-15 pnk">Hotel info</p>
                            </div>
                            <div class="ps-3">
                                <p class="mb-2 mt-2 fs-15 pnk">Settings</p>
                            </div>
                            <div class="ps-3">
                            </div>
                            <div class="flex-shrink-0 btn-lg-square">
                                <img src="{{asset('assets/img/avatar.png')}}" width="40px" style="border-radius:50%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand & Contact End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-dark sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="#" class="navbar-brand ms-3 d-lg-none">MENU</a>
        <button type="button" class="navbar-toggler me-3" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto p-3 p-lg-0">
                <a href="#" class="nav-menu">Home</a>
                <a href="#" class="nav-menu">About Us</a>
                <a href="#" class="nav-menu">Services</a>
                <a href="#" class="nav-menu">Projects</a>
                <a href="#" class="nav-menu">Contact Us</a>
                <a href="#" class="nav-menu">Get Started</a>
            </div>
            
        </div>
    </nav>
    <!-- Navbar End -->
