@extends('site.master')
@section('title', 'Team | ' . env('APP_NAME'))



@section('content')



    <section class="hero-page-content">

        <div class="overlay"></div>

        <div class="container hero-info">
            <h2>Welcome To Team Webura<span></span></h2>
            <p>
                Feel Free Read & Get More Informations Programmers Team!.
            </p>
        </div>



    </section>

    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451" target="_blank"
            role="button" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i
                class="fa-brands fa-whatsapp"></i></a> <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100" data-aos-duration="1000"><i class="fa-solid fa-angles-up"></i></a>
    </div>


    <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">

            <div class="team-information">
                <h2>Our Programmers Team</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="member" data-aos="zoom-in" data-aos-delay="100">
                        <div class="pic"><img src="{{ asset('site-assets/images/test-img2.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Walter White</h4>
                            <span>Chief Executive Officer</span>
                            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="member" data-aos="zoom-in" data-aos-delay="200">
                        <div class="pic"><img src="{{ asset('site-assets/images/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Sarah Jhonson</h4>
                            <span>Product Manager</span>
                            <p>Aut maiores voluptates amet et quis praesentium qui senda para</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="300">
                        <div class="pic"><img src="{{ asset('site-assets/images/team/team-3.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>William Anderson</h4>
                            <span>CTO</span>
                            <p>Quisquam facilis cum velit laborum corrupti fuga rerum quia</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mt-4">
                    <div class="member" data-aos="zoom-in" data-aos-delay="400">
                        <div class="pic"><img src="{{ asset('site-assets/images/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
                        <div class="member-info">
                            <h4>Amanda Jepson</h4>
                            <span>Accountant</span>
                            <p>Dolorum tempora officiis odit laborum officiis et et accusamus</p>
                            <div class="social">
                                <a href=""><i class="ri-twitter-fill"></i></a>
                                <a href=""><i class="ri-facebook-fill"></i></a>
                                <a href=""><i class="ri-instagram-fill"></i></a>
                                <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <section class="feedback">
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
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic1.webp') }}" alt="pic1">
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
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic2.webp') }}" alt="pic2">
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
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic3.webp') }}" alt="pic3">
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
                                        <img class="mb-4" src="{{ asset('site-assets/images/feadback/revpic4.webp') }}" alt="pic4">
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

    @endsection
