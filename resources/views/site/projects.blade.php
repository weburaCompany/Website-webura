@extends('site.master')
@section('title', 'Projects | ' . env('APP_NAME'))
@section('styles')
    <link rel="stylesheet" href="{{ asset('site-assets/css/project.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/project.css.map') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/project.scss') }}">
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
            <h2>Welcome To Project Page<span></span></h2>
            <p>
                See Our Popular Website Template All
            </p>
        </div>



    </section>

    <!-- Projects Section -->
    <section class="projects" class="py-5">
        <div class="container">
            <div class="project-information" data-aos="fade-up">
                <h2>Webura Projects</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit
                    in iste officiis commodi quidem hic quas.</p>
            </div>
            <div class="row d-flex align-items-stretch project-item">
                @foreach ($projects as $project)
                    <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="project-card">
                            <div class="overlay"></div>
                            <img src="{{ asset($project->image) }}" alt="Project 1">
                            <div class="card-body">
                                <h5>{{ $project->name }}</h5>
                                <p>{{ $project->description }}</p>
                                <a href="{{ route('webura.soon') }}" class="btn btn-primary">Learn More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
