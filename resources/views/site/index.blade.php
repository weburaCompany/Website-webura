@extends('site.master')
@section('title', 'Home | ' . env('APP_NAME'))

@section('content')

    <!-- <header>
            <div class="overlay"></div>
            <div class="video-header">
                <video src="video/2.mp4" muted loop autoplay></video>
            </div>
            <div class="header-data" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="500">
                <div class="container">
                    <h2>Welcome To <span>Webura</span></h2>
                    <p>
                        At Webura, we specialize in turning ideas into impactful results. From programming and
                        design to marketing and advertising, we provide innovative solutions that help your business
                        thrive Founded in 2022, Webura is a company built on the belief that great ideas deserve exceptional
                        execution.
                    </p>
                    <a data-mdb-ripple-init class="btn btn-primary mt-2" href="#about" role="button">Let’s Collaborate</a>
                </div>
            </div>
            </div>
        </header> -->

    <header>
        <div class="overlay"></div>

        <div class="video-header">
            <video src="video/2.mp4" muted loop autoplay></video>
        </div>

        <div class="header-data">
            <div class="container">
                <h2>Welcome To <span>Webura</span></h2>
                <p>
                    At Webura, we specialize in turning bold ideas into impactful realities. From innovative web
                    development to strategic marketing and creative advertising, we provide tailored solutions that help
                    businesses excel in today’s fast-paced digital landscape.
                    Since 2022, we’ve been driven by a commitment to quality, creativity, and results. Let’s collaborate
                    to take your business to the next level.

                </p>
                <a data-mdb-ripple-init class="btn btn-primary mt-2" href="#about" role="button">Let’s Collaborate</a>
            </div>
        </div>


        </div>
    </header>


    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451"
            target="_blank" role="button" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i
                class="fa-brands fa-whatsapp"></i></a> <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100" data-aos-duration="1000"><i class="fa-solid fa-angles-up"></i></a>
    </div>

    <!---------Features Section  done --------------->

    <section class="feature">
        <h5><span><i class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i></span> Core Features <span><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i></span></h5>
        <h2>Amazing web design features
        </h2>

        <div class="feature-data">
            <div class="container text-center">
                <div class="row g-3">
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>Seamless Responsiveness</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>Tailored Solutions</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>
                            Dynamic Animations</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>Search-Optimized Code</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>Reliable Technical Support</h4>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-2 feature-item" data-aos="flip-left" data-aos-delay="100"
                        data-aos-duration="2000">
                        <img src="{{ asset('site-assets/images/icon/t.jpg') }}" alt="">
                        <h4>Creative Layouts with Parallax Effects</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- ---------------About us-------------- -->
    <section class="custom-section" id="about">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <h5 class="custom-title">ABOUT US</h5>
                    <h2 class="fw-bold">Welcome to Webura</h2>
                    <p>We specialize in creative problem-solving and delivering tailored services to meet your unique
                        needs. Since our founding, we’ve been committed to helping businesses succeed in the
                        ever-changing digital landscape..</p>
                    <p>We specialize in creative problem-solving and delivering tailored services to meet your unique
                        needs. Since our founding, we’ve been committed to helping businesses succeed in the
                        ever-changing digital landscape.</p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> Creative Websites Design</p>
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> Accounting Procedures
                                Guidebook
                            </p>
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> Cost Accounting Fundamentals
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> Online Classes</p>
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> SEO Optimization Services</p>
                            <p class="icon-text"><i class="fa-solid fa-circle-check"></i> International Certificate</p>
                        </div>
                    </div>

                    <button class="animated-button">
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
                    </button>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6 text-center" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <img src="{{ asset('site-assets/images/traffic-img.png') }}" alt="Books" class="img-fluid">
                </div>

            </div>
        </div>
    </section>

    <!-- servivces -->
    <section class="services">

        <div class="service-header container text-center mt-5" data-aos="fade-up">
            <h1>Explore Our Exceptional Services</h1>
            <p class="lead">
                We offer innovative solutions to take your business forward Lorem ipsum dolor sit amet.
            </p>
        </div>

        <div class="container mt-5 services-section">
            <div class="row g-4">
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Custom Website Design</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>UI/UX Design</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>App Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Social Media Management
                            </h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>SEO Optimization</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Paid Ads Campaigns</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Motion Graphics</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 programming" style="display: block">
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-image">
                            <img src="{{ asset('site-assets/images/icon/design-primary.png') }}" alt="">
                        </div>
                        <div class="service-info">
                            <h5>Website Development</h5>
                            <p>
                                Design and develop innovative websites that meet your needs.
                            </p>
                            <a href="#" class="btn-read fw-bold">Discover more &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>
    <!-- servivces -->

    <!------- لماذا نحن --------------->
    <section class="work">
        <div class="work-info">
            <div class="text-center my-5">
                <h1>Our Agile Process
                </h1>
                <p class="w-75 mx-auto">
                    At Webura, we use an Agile approach to stay flexible, work collaboratively, and deliver outstanding
                    results:
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <div class="process-step">
                        <div class="circle-icon">1</div>
                        <div class="line"></div>
                        <div class="work-item">
                            <h4>Understand & Define</h4>
                            <p>We take the time to understand your needs and set clear, achievable goals that align with
                                your vision.
                            </p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="circle-icon">2</div>
                        <div class="line"></div>
                        <div class="work-item">
                            <h4>Iterate & Develop</h4>
                            <p>By breaking the project into smaller sprints, we make steady progress while incorporating
                                feedback along the way.</p>
                        </div>
                    </div>
                    <div class="process-step">
                        <div class="circle-icon">3</div>
                        <div class="work-item">
                            <h4>Deliver & Improve</h4>
                            <p>After delivery, we review and refine based on your feedback, making sure the final result
                                exceeds expectations.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 illustration" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <img src="{{ asset('site-assets/images/work.png') }}" alt="Data Science Process Image"
                        class="img-fluid">
                </div>
            </div>
        </div>

    </section>

    <!-- ---------Team------- -->
    <section class="scientist-section">
        <div class="container">
            <div class="scientist-header" data-aos="fade-up">
                <h6>Team Members</h6>
                <h1>Meet Our Team Webura</h1>
                <p class="w-75 mx-auto">
                    Behind every successful project is a talented team of experts. At Webura, our team combines
                    creativity, technical skills, and industry knowledge to deliver exceptional results.

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

    <!-- ---------------------project--------------- -->
    <section class="project py-5">
        <div class="container ">
            <div class="row">
                <div class="col-lg-12 text-center mb-5" data-aos="fade-up">
                    <h2>Highlights from Our <span> Projects</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="image mb-2">
                        <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                        <div class="overlay-text text-center span">
                            <h3>Personal Portfolio Website</h3>
                            <p>A design for a personal website showcasing skills, past projects, and a professional
                                resume
                                in an appealing and interactive layout.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-sm-12 col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                            <div class="image mb-4">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                                <div class="overlay-text text-center">
                                    <h3>Restaurant Menu Page</h3>
                                    <p>A travel blog design displaying travel experiences with img and details about
                                        popular destinations.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                            <div class="image mb-4">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                                <div class="overlay-text text-center">
                                    <h3>Online Store Homepage</h3>
                                    <p>A travel blog design displaying travel experiences with img and details about
                                        popular destinations.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                            <div class="image mb-4">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                                <div class="overlay-text text-center">
                                    <h3>Travel Blog Website</h3>
                                    <p>A travel blog design displaying travel experiences with img and details about
                                        popular destinations.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                            <div class="image mb-4">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}" alt="">
                                <div class="overlay-text text-center">
                                    <h3>Event Landing Page</h3>
                                    <p>A travel blog design displaying travel experiences with img and details about
                                        popular destinations. </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ---------------Blog---------------- -->
    <section class="Blog">

        <div class="Blog-header" data-aos="fade-up">
            <h1>Digital Tips & Tricks</h1>
            <p class="w-75 mx-auto">
                Stay informed with the latest insights, tips, and trends from our team. Explore articles that inspire
                and help you grow your business
            </p>
        </div>

        <div class="container py-5">
            <div class="row g-4">

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="position-relative">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="card-img-top"
                                alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}"
                                    class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold titel-blog">The Power of Social Media Marketing</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="position-relative">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="card-img-top"
                                alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}"
                                    class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold titel-blog">How SEO Can Transform Your Business</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>



                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="position-relative">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="card-img-top"
                                alt="Teamwork">
                            <span class="badge badge-custom">SEO, Marketing</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="rounded-circle me-2"
                                    alt="Writer">
                                <small class="text-muted">Writer</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold titel-blog">How SEO Can Transform Your Business</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>


                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 box" data-aos="fade-up" data-aos-delay="400">
                    <div class="card">
                        <div class="position-relative">
                            <img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="card-img-top"
                                alt="Office Setup">
                            <span class="badge badge-custom">Business</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="{{ asset('site-assets/images/test-img2.jpg') }}"
                                    class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold titel-blog">Optimize Your Website for Better Performance</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="#" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- FeadBack -->
    <section class="feedback" data-aos="fade-up">
        <div class="container py-5">
            <div class="row justify-content-center text-center">
                <div class="col-lg-12 text-center">
                    <h2 class="feedback-info">Trusted Feedback</h2>
                </div>
                <div class="col-lg-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row tab">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic1.webp') }}"
                                            alt="pic1">
                                        <h5> Alexandra Smith</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="mx-auto">
                                            "The team delivered the project on time, and the quality was beyond
                                            expectations. Their attention to detail was outstanding, and their
                                            communication throughout the process was top-notch. We truly felt supported
                                            every step
                                            of the way."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row tab">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic2.webp') }}"
                                            alt="pic2">
                                        <h5>Johanna Richardson</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="mx-auto">"Working with this company was a fantastic
                                            experience! They took the time to
                                            understand our unique requirements and provided a custom solution that
                                            not only
                                            met but exceeded our expectations. Their professionalism was evident
                                            from start
                                            to finish."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row tab">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic3.webp') }}"
                                            alt="pic3">
                                        <h5> Christina Hawakins</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="mx-auto">"Excellent service from start to finish! The
                                            developers were highly skilled,
                                            responsive, and proactive in addressing our needs. They ensured
                                            everything was
                                            tailored specifically to our requirements and kept us informed
                                            throughout the project."</p>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row tab">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic4.webp') }}"
                                            alt="pic4">
                                        <h5> Andres Johnson</h5>
                                    </div>
                                    <div class="col-lg-12">
                                        <p class="mx-auto">"I'm thoroughly impressed by the professionalism
                                            and technical expertise of the
                                            team. They tackled our complex issues with ease, providing solutions
                                            that were
                                            both efficient and effective. They truly went above and beyond to ensure
                                            everything was perfect."</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ---------contact-------- -->
    <section class="contact-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 contact" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="form-title">Get in Touch!</h2>
                    <p>Ready to take your business to the next level? Our team of experts is here to help. Contact us
                        today to discuss your project, and let’s work together to bring your vision to life.
                        .</p>
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

                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-up" data-aos-delay="200">
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

                                <textarea class="form-control" rows="4" placeholder="Tell us about your project or inquiry"></textarea>
                            </div>
                            <div class="d-grid mt-3">
                                <button type="submit" class="btn btn-primary">Send Message or Let’s Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>

@endsection
