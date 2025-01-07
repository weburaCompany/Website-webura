<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', env('APP_NAME'))</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=sukar-black"   />


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.min.css" rel="stylesheet" />


    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">



    <link rel="stylesheet" href="{{ asset('site-assets/css/style.css') }}">
    @yield('styles')
</head>

<body>
    <!-- ---------------hero-section----------------- -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <!-- Container wrapper -->
        <div class="container">
            <!-- Navbar brand -->
            <a class="navbar-brand me-2" href="{{ route('webura.index') }}">
                <img src="{{ asset('site-assets/images/logo-primary.png') }}" alt="">
            </a>

            <!-- Toggle button -->
            <button data-mdb-collapse-init class="navbar-toggler" type="button" data-mdb-target="#navbarButtonsExample"
                aria-controls="navbarButtonsExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarButtonsExample">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.about-us') }}">About-us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.services') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.projects') }}">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.faq') }}">FQA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.team') }}">Teams</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('webura.blog') }}">Blog</a>
                    </li>
                </ul>
                <!-- Left links -->

                <div class="d-flex align-items-center">
                    <!-- <button data-mdb-ripple-init type="button" class="btn btn-link px-3 me-2">
                  Login
                </button> -->
                    <a href="{{ route('webura.contact-us') }}" class="btn-contact">
                        <button data-mdb-ripple-init type="button" class="btn btn-primary me-3">
                            Contact us
                        </button>
                    </a>
                    <a data-mdb-ripple-init class="btn btn-dark px-3" href="https://github.com/mdbootstrap/mdb-ui-kit"
                        role="button"><i class="fab fa-github"></i></a>
                </div>
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>



    @yield('content')


    <!-- Footer -->
    <footer class="text-center text-lg-start text-muted">
        <!-- Section: Social media -->
        <section class="container d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block text-titel">
                <span>Follow us for the latest updates, tips, and insights :</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div class="icon">
                <a href="https://www.facebook.com/profile.php?id=61570826266885&mibextid=ZbWKwL" class="me-4 text-reset"
                    target="_blank">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://x.com/Weburagaza?t=9ITATegZk9u7cpCtb_e2LA&s=09" class="me-4 text-reset"
                    target="_blank">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset" target="_blank">
                    <i class="fab fa-google"></i>
                </a>
                <a href="https://www.instagram.com/webura.company?igsh=MWh5aHJ2YWE4OXU1aQ==" class="me-4 text-reset"
                    target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://www.linkedin.com/in/webura-company-95bbb0342?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app"
                    class="me-4 text-reset" target="_blank">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset" target="_blank">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="footer-data">
            <div class="container text-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-sm-12 col-md-12 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <img src="{{ asset('site-assets/images/white-logo.png') }}" alt="" class="logo">
                        <p>
                            At Webura, we specialize in delivering creative digital solutions that empower businesses to
                            succeed. From web design to digital marketing, we bring your ideas to life.

                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Custom Website Design</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">App Development
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">UI/UX Design
                            </a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">SEO Optimization
                            </a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-sm-12 col-md-6 col-lg-2 col-xl-2 mx-auto mb-4 mt-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Useful links
                        </h6>
                        <p>
                            <a href="{{ route('webura.index') }}" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="{{ route('webura.about-us') }}" class="text-reset">About Us
                            </a>
                        </p>
                        <p>
                            <a href="{{ route('webura.services') }}" class="text-reset">Services</a>
                        </p>
                        <p>
                            <a href="{{ route('webura.blog') }}" class="text-reset">Blog</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i> Webura, Gaza City, Palestine</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            weburagaza@gmail.com

                        </p>
                        <p><i class="fas fa-phone me-3"></i> + 970592228451</p>
                        <p><i class="fas fa-print me-3"></i> + 972592228451</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="footer-end text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2024 Copyright:
            <a class="text-reset fw-bold" href="">Webura.All Rights Reserved</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/8.1.0/mdb.umd.min.js"></script>

    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script type="module" src="{{ asset('site-assets/js/app.js') }}"></script>
    <script src="{{ asset('site-assets/js/script-home.js') }}"></script>
    @yield('scripts')
</body>

</html>
