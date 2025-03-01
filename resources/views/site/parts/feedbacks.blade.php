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
                        @foreach ($feedbacks as $feedback)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="row tab">
                                    <div class="col-lg-12">
                                        <img class="mb-4" src="{{ asset($feedback->image) }}" alt="pic1">
                                        <h5> {{ $feedback->name }}</h5>
                                    </div>
                                    <div class="col-lg-12">

                                        <p class="mx-auto">
                                            "{{ $feedback->content }}"
                                        </p>


                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
