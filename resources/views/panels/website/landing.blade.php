@extends('layouts.main')
@section('content')

<!-- Page Header Start -->
<div class="container-fluid page-header pt-30 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container text-center py-5">
        <h4 class="text-ltpink animated slideInDown mb-3">Are you ready to travel?</h4>
        <h3 class="text-ltpink animated slideInDown mb-3">Get the best direct booking hotel offers</h3>
        <button class="btn btn-primary pd-12 px-5">Let's go</button>
    </div>
</div>
<!-- Page Header End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 mw-700 wow fadeInUp" data-wow-delay="0.1s">
            <h4 class="mb-4">Why Hotels Story?</h4>
            <p>As a traveller you will be just comparing hotel prices on online travel agency websites.<br>But booking directly on a hotel website will get you a better price and more benefits.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-1.jpg')}}" alt="">
                    <h4 class="mb-0">Web Design</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-2.jpg')}}" alt="">
                    <h4 class="mb-0">App Development</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-3.jpg')}}" alt="">
                    <h4 class="mb-0">SEO Optimization</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-4.jpg')}}" alt="">
                    <h4 class="mb-0">Social Marketing</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-5.jpg')}}" alt="">
                    <h4 class="mb-0">Email Marketing</h4>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <a class="service-item d-block rounded text-center h-100 p-4" href="">
                    <img class="img-fluid rounded mb-4" src="{{asset('assets/img/service-6.jpg')}}" alt="">
                    <h4 class="mb-0">PPC Advertising</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->


<!-- Testimonial Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 mw-700 wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Testimonial</h6>
            <h1 class="display-6 mb-4">What Our Clients Say!</h1>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('assets/img/testimonial-1.jpg')}}" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('assets/img/testimonial-2.jpg')}}" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="{{asset('assets/img/testimonial-3.jpg')}}" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
            <div class="testimonial-item bg-light rounded p-4">
                <div class="d-flex align-items-center mb-4">
                    <img class="flex-shrink-0 rounded-circle border p-1" src="img/testimonial-4.jpg" alt="">
                    <div class="ms-4">
                        <h5 class="mb-1">Client Name</h5>
                        <span>Profession</span>
                    </div>
                </div>
                <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->

@stop

