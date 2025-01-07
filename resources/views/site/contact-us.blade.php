@extends('site.master')
@section('title', 'Contact Us | ' .env('APP_NAME'))




@section('content')



    <section class="hero-page-content">

        <div class="overlay"></div>

        <div class="container hero-info">
          <h2>Welcome To Contact Page<span></span></h2>
          <p>
            Feel Work Together! Contact With us!
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

<section class="contact-info" data-aos="fade-up">
    <div class="container">
        <div class="row">


            <div class="col-sm-12 col-md-12 col-lg-12">
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

        </div>
    </div>
</section>

<section class="contact" data-aos="fade-up">
    <div class="container">
        <div class="row g-5">
            <div class="contact-form">
                <h3 class="form-title">Let's Connect!</h3>
                <p class="form-subtitle">Send us a message, and we'll promptly discuss your project with you.</p>
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-user"></i>
                                <input type="text" class="form-control" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-envelope"></i>
                                <input type="email" class="form-control" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-phone"></i>
                                <input type="tel" class="form-control" placeholder="Your Phone No." required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <i class="fas fa-building"></i>
                                <input type="text" class="form-control" placeholder="Your Company Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <i class="fas fa-message" style="top: 25px;"></i>
                                <textarea class="form-control" style="padding-bottom: 80px;"
                                    placeholder="How can we help you?" required></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-submit">
                                Send Request
                                <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>
</section>

@endsection