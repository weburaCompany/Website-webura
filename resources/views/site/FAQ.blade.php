@extends('site.master')
@section('title', 'FAQ | ' . env('APP_NAME'))

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
            <h2>Welcome To Faq & Help <span></span></h2>
            <p>
                Feel Free Read & Get More Informations Asked Questions!
            </p>
        </div>



    </section>


    <!-- ---------------About us-------------- -->
    <section class="custom-section">
        <div class="container">
            <div class="row align-items-center">



                <div class="col-sm-12 col-md-12 col-lg-6" data-aos="fade-right">
                    <h5 class="custom-title">Finding Help
                    </h5>
                    <h2 class="fw-bold">How Can We Help
                    </h2>
                    <p class="help-info">Start building your first prototype in no time. Ogency intuitive drag & drop
                        interface gives you
                        all the building blocks that you need to get started! No skills required.

                    </p>
                    <p class="help-info">Start building your first prototypeno time Ogency intuitive, drag drop
                        interface gives building
                        blocks that you needs.

                    </p>

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

                <div class="col-sm-12 col-md-12 col-lg-6 text-center" data-aos="fade-left">
                    <img src="{{ asset('site-assets/images/traffic-img.png') }}" alt="Books" class="img-fluid">
                </div>

            </div>
        </div>
    </section>



    <section class="help-section">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-6 illustration-col">
                    <img src="{{ asset('site-assets/images/helpImage.png') }}" alt="Help" class="illustration-img">
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6">
                    <h3 class="display-4 fw-bold mb-4" data-aos="fade-up">We're here to help</h3>
                    <div class="search-container" data-aos="fade-up" data-aos-delay="200">
                        <input type="text" class="search-input" placeholder="Start typing your question here...">
                        <button class="search-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
                                viewBox="0 0 16 16">
                                <path
                                    d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                            </svg>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <section class="fqa">
        <h5><span><i class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i></span> FQA <span><i class="fa-solid fa-circle"></i><i
                    class="fa-solid fa-circle"></i><i class="fa-solid fa-circle"></i></span></h5>
        <h2>Informations Asked Questions
        </h2>
        <div class="container">
            <div class="wrapper">
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

@endsection
