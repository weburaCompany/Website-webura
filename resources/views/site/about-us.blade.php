@extends('site.master')
@section('title', 'About Us | ' . env('APP_NAME'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('site-assets/css/about-us.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/about-us.css.map') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/about-us.scss') }}">
@endsection

@section('content')

    <section class="hero-page-content">

        <div class="overlay"></div>

        <div class="container hero-info">
            <h2>Welcome To About Page</h2>
            <p>
                Feel Free Read & Get More Informations About Us!

            </p>
        </div>



    </section>

    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451"
            target="_blank" role="button" data-aos="fade-down" data-aos-delay="100"><i
                class="fa-brands fa-whatsapp"></i></a>
        <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100"><i class="fa-solid fa-angles-up"></i></a>
    </div>

    <section class="custom-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-right" data-aos-delay="100">
                    <h5 class="custom-title">Who We Are</h5>
                    <h2 class="fw-bold">We are Professional <br> Digital Team</h2>
                    <p class="info">Convert your emails into tickets and keep them all organized in one place. Never
                        leave customers'
                        questions unanswered.</p>
                    <p class="info">Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda saepe rem,
                        incidunt recusandae
                        libero fuga?.</p>
                    <div class="row align-items-center">
                        <div class="col-md-6 ">
                            <div class="feature-box d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-check-circle text-primary fs-5"></i> <!-- أيقونة الصح -->
                                </div>
                                <div>
                                    <h5>Customize Website</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo explicabo odit
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 border-start border-2">
                            <div class="feature-box d-flex align-items-start">
                                <div class="me-3">
                                    <i class="bi bi-check-circle text-primary fs-5"></i>
                                </div>
                                <div>
                                    <h5>Customize Website</h5>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Nemo explicabo odit
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <button class="animated-button">
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-2" viewBox="0 0 24 24">
                            <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                            </path>
                        </svg>
                        <span class="text">Read More </span>
                        <span class="circle"></span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="arr-1" viewBox="0 0 24 24">
                            <path
                                d="M16.1716 10.9999L10.8076 5.63589L12.2218 4.22168L20 11.9999L12.2218 19.778L10.8076 18.3638L16.1716 12.9999H4V10.9999H16.1716Z">
                            </path>
                        </svg>
                    </button> --}}
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 text-center" data-aos="fade-left" data-aos-delay="100">
                    <img src="{{ asset('site-assets/images/about.jpg') }}" alt="Books" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <section class="why">
        <div class="overlay"></div>
        <h1 class="section-title" data-aos="fade-up">Why Webura Company</h1>
        <div class="container">
            <div class="row work-item">
                <!-- العمود الأول -->
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12042-80x80.png') }}" alt="Technologies"
                            class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12043-e1652966546511.png') }}"
                            alt="Technologies" class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12044-80x80.png') }}" alt="Technologies"
                            class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12044-80x80.png') }}" alt="Technologies"
                            class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12044-80x80.png') }}" alt="Technologies"
                            class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="work-date">
                        <img src="{{ asset('site-assets/images/icon-about/Group-12044-80x80.png') }}" alt="Technologies"
                            class="image-fluid img-information">

                        <h5>High-end Technologies</h5>
                        <p>We use the latest technologies including AI, IoT, Blockchain, and much more.</p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ---------Team------- -->
    <section class="scientist-section">
        <div class="container">
            <div class="scientist-header" data-aos="fade-up">
                <h6>Team Members</h6>
                <h1>Our Programmers Team</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    <br>
                    incididunt ut labore et dolore magna aliqua.
                </p>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-3 scientist-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="scientist-image">
                        <img src="{{ asset('site-assets/images/test-img.jpg') }}" alt="Merv Adrian">
                        <div class="social-icons">
                            <a href="https://www.facebook.com">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <h5>Merv Adrian</h5>
                    <p>Data Management</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 scientist-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="scientist-image">
                        <img src="{{ asset('site-assets/images/test-img.jpg') }}" alt="Kirk Borne">
                        <div class="social-icons">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <h5>Kirk Borne</h5>
                    <p>Data Scientist</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 scientist-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="scientist-image">
                        <img src="{{ asset('site-assets/images/test-img.jpg') }}" alt="Carla Gentry">
                        <div class="social-icons">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <h5>Carla Gentry</h5>
                    <p>Analytical Solutions</p>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3 scientist-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="scientist-image">
                        <img src="{{ asset('site-assets/images/test-img.jpg') }}" alt="Marie Curie">
                        <div class="social-icons">
                            <a href="#">
                                <i class="bi bi-facebook"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-twitter"></i>
                            </a>
                            <a href="#">
                                <i class="bi bi-instagram"></i>
                            </a>
                        </div>
                    </div>
                    <h5>Marie Curie</h5>
                    <p>Data Scientist</p>
                </div>
            </div>
        </div>
    </section>

    <section class="history">
        <div class="container mt-5">
            <div class="history-information" data-aos="fade-up">
                <h2>Company History</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="timeline">
                <!-- Event 1 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="timeline-content">
                        <h5>Event 1</h5>
                        <p>Details about the first event that happened in the company.</p>
                        <h6>2020-01-01</h6>
                    </div>
                </div>
                <!-- Event 2 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="timeline-content">
                        <h5>Event 2</h5>
                        <p>
                            Details about the second event that took place in the company.
                        </p>
                        <h6>2021-05-10</h6>
                    </div>
                </div>
                <!-- Event 3 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="timeline-content">
                        <h5>Event 3</h5>
                        <p>Details about the third important milestone in the company.</p>
                        <h6>2022-08-25</h6>
                    </div>
                </div>
                <!-- Event 4 -->
                <div class="timeline-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="timeline-content">
                        <h5>Event 4</h5>
                        <p>Details about the latest development or event in the company.</p>
                        <h6>2023-12-15</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fqa">
        <h5 data-aos="fade-up"><span><i class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i></span> FQA <span><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i></span></h5>
        <h2 data-aos="fade-up">Informations Asked Questions
        </h2>
        <div class="container">
            <div class="wrapper" data-aos="fade-up" data-aos-delay="100">
                <input type="radio" id="radioYour Account" name="accordion" checked="checked" />
                <label class="item" for="radioYour Account">
                    <div class="title">Your Account</div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid
                        harum velit
                        sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint
                        dolore, deserunt
                        dolorum accusantium.</div>
                </label>
                <input type="radio" id="radioPayment &amp; Pricing" name="accordion" />
                <label class="item" for="radioPayment &amp; Pricing">
                    <div class="title">Payment &amp; Pricing</div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid
                        harum velit
                        sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint
                        dolore, deserunt
                        dolorum accusantium.</div>
                </label>
                <input type="radio" id="radioReturns &amp; Refunds" name="accordion" />
                <label class="item" for="radioReturns &amp; Refunds">
                    <div class="title">Returns &amp; Refunds</div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid
                        harum velit
                        sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint
                        dolore, deserunt
                        dolorum accusantium.</div>
                </label>
                <input type="radio" id="radioShipping &amp; Pickup" name="accordion" />
                <label class="item" for="radioShipping &amp; Pickup">
                    <div class="title">Shipping &amp; Pickup</div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid
                        harum velit
                        sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint
                        dolore, deserunt
                        dolorum accusantium.</div>
                </label>
                <input type="radio" id="radioViewing &amp; Changing Orders" name="accordion" />
                <label class="item" for="radioViewing &amp; Changing Orders">
                    <div class="title">Viewing &amp; Changing Orders</div>
                    <div class="content">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis aliquid
                        harum velit
                        sed similique exercitationem, quasi in, nulla quos accusamus nemo vel dolores. Est id sint
                        dolore, deserunt
                        dolorum accusantium.</div>
                </label>
            </div>
        </div>

    </section>

    <!-- ---------contact-------- -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 contact" data-aos="fade-right" data-aos-delay="100">
                    <h2 class="form-title">You Have Our Attention!</h2>
                    <p>Our team of certified engineers and tech enthusiasts is keen to help you
                        securely & efficiently take your business to the next level.</p>
                    <div class="white-line"> </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between business-info">
                        <div class="business-email mb-3 mb-md-0">
                            <strong>Business Email</strong><br>
                            weburagaza@gmail.com
                        </div>
                        <div class="business-phone">
                            <strong>Business Phone</strong><br>
                            +970592228451
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-left" data-aos-delay="100">
                    <div class="contact-card">
                        <form>
                            <div class="row  g-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="row g-3 mt-3">
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" placeholder="Your Company Name">
                                </div>
                            </div>
                            <div class="mt-3">

                                <textarea class="form-control" rows="4" placeholder="Let us know what you need"></textarea>
                            </div>
                            <div class="d-grid mt-3">
                                <!-- Submit Button -->
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>

@endsection
