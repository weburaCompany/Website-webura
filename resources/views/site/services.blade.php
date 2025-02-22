@extends('site.master')
@section('title', 'Services | ' . env('APP_NAME'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('site-assets/css/services.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/services.css.map') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/services.scss') }}">
@endsection

@section('content')

    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451"
            target="_blank" role="button" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i
                class="fa-brands fa-whatsapp"></i></a> <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100" data-aos-duration="1000"><i class="fa-solid fa-angles-up"></i></a>
    </div>

    <section class="hero-page-content">

        <div class="overlay"></div>

        <div class="container hero-info">
            <h2>Welcome To Popular Services
                <span></span>
            </h2>
            <p>
                Feel Free Read & Get More Discover Extraordinary
                projects!
            </p>
        </div>



    </section>



    <!-- All Services (Design and Programming) -->
    <section class="services">
        <div class="service-header container text-center mt-5" data-aos="fade-up">
            <h1>Explore Our Exceptional Services</h1>
            <p class="lead">
                We offer innovative solutions to take your business forward Lorem ipsum dolor sit amet.
            </p>
        </div>
        <div class="container">

            <div class="row g-4 mt-lg-4">
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="100"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="200"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="300"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="400"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="100"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="200"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="300"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="400"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="100"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="200"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="300"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
                <!-- Programming Services -->
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" data-aos="fade-up" data-aos-delay="400"
                    style="display: block">
                    <div class="service-card" data-aos="fade-up">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="soon.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="services-information">
        <div class="container">
            <h2 class="services-titel text-center" data-aos="fade-up">Our Services</h2>
            <div class="services-content">
                <!-- Service 1 -->
                <div class="service-item">
                    <h3><i class="fas fa-laptop-code"></i> Website Development</h3>
                    <p>
                        Build customizable, outstanding websites using the latest
                        programming technologies, ensuring excellent performance and a
                        great user experience.
                    </p>
                </div>
                <!-- Service 2 -->
                <div class="service-item">
                    <h3><i class="fas fa-mobile-alt"></i> App Development</h3>
                    <p>
                        Design and develop mobile apps compatible with both iOS and
                        Android systems, ensuring ease of use and high efficiency.
                    </p>
                </div>
                <!-- Service 3 -->
                <div class="service-item">
                    <h3><i class="fas fa-cogs"></i> Content Management</h3>
                    <p>
                        Create and develop content management systems that allow clients
                        to manage their websites easily without technical expertise.
                    </p>
                </div>
                <!-- Service 4 -->
                <div class="service-item">
                    <h3><i class="fas fa-palette"></i> Visual Identity Design</h3>
                    <p>
                        Design visual identities for companies and brands, including
                        logos, colors, and typography, ensuring a distinctive,
                        integrated brand image.
                    </p>
                </div>
                <!-- Service 5 -->
                <div class="service-item">
                    <h3><i class="fas fa-bullhorn"></i> Advertising Design</h3>
                    <p>
                        Create innovative and attractive ads, both digital and print, to
                        enhance communication with the target audience and increase
                        sales.
                    </p>
                </div>
                <!-- Service 6 -->
                <div class="service-item">
                    <h3><i class="fas fa-desktop"></i> Web Design</h3>
                    <p>
                        Provide innovative and attractive website designs that focus on
                        user experience and are compatible with all devices.
                    </p>
                </div>
            </div>
        </div>
    </section>

@endsection
