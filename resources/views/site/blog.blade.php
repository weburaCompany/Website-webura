@extends('site.master')
@section('title', 'Blog | ' . env('APP_NAME'))

@section('styles')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog.css.map') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog.scss') }}">
@endsection


@section('content')
    <section class="hero-page-content">

        <div class="overlay"></div>

        <div class="container hero-info">
            <h2>Welcome To Latest News
                <span></span>
            </h2>
            <p>
                Feel Free Read & Get More Informations Latest News!
            </p>
        </div>



    </section>
    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451"
            target="_blank" role="button" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i
                class="fa-brands fa-whatsapp"></i></a> <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100" data-aos-duration="1000"><i class="fa-solid fa-angles-up"></i></a>
    </div>


    <section class="Blog">

        <div class="Blog-header" data-aos="fade-up">
            <h1>Blog</h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                <br>
                incididunt ut labore et dolore magna aliqua.
            </p>
        </div>

        <div class="container py-5">

            
            <div class="row g-4">

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enabled</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enabled</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Teamwork">
                            <span class="badge badge-custom">SEO, Marketing</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle me-2" alt="Writer">
                                <small class="text-muted">Writer</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enable</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row g-4">

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enabled</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Meeting">
                            <span class="badge badge-custom">SEO, Analytics</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle small-avatar me-2" alt="Admin">
                                <small class="text-muted me-2">Admin</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar me-1"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enabled</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 col-lg-4 box" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <div class="position-relative">
                            <img src="images/test-img2.jpg" class="card-img-top" alt="Teamwork">
                            <span class="badge badge-custom">SEO, Marketing</span>
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <img src="images/test-img2.jpg" class="rounded-circle me-2" alt="Writer">
                                <small class="text-muted">Writer</small>
                                <small class="text-muted1 ms-auto">
                                    <i class="bi bi-calendar"></i>
                                    15 March 2020
                                </small>
                            </div>
                            <h5 class="fw-bold">Holisticly promote enable</h5>
                            <p class="card-text">
                                Some quick example text to build on the card title and make up the bulk of the
                                card's content.
                            </p>
                            <a href="blog-details.html" class="btn-read fw-bold">Read more &rarr;</a>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </section>

@endsection
