@extends('site.master')
@section('title', $blog->title . ' | ' . env('APP_NAME'));
@section('styles')
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog-details.css') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog-details.css.map') }}">
    <link rel="stylesheet" href="{{ asset('site-assets/css/blog-details.scss') }}">
@endsection

@section('content')
    <div class="header-icon">
        <a data-mdb-ripple-init class="btn btn-success whatsapp" href="https://api.whatsapp.com/send/?phone=970592228451"
            target="_blank" role="button" data-aos="fade-down" data-aos-delay="100" data-aos-duration="1000"><i
                class="fa-brands fa-whatsapp"></i></a> <br>


        <a data-mdb-ripple-init class="btn btn-primary mt-2 arrow-top" href="" role="button" data-aos="fade-down"
            data-aos-delay="100" data-aos-duration="1000"><i class="fa-solid fa-angles-up"></i></a>
    </div>


    <!-- Blog Post -->
    <section class="blog">
        <div class="container my-5">
            <div class="content-blog">
                <h1>{{ $blog->title }}</h1>
                <p class="text-muted">Published on {{ $blogPublishDate->format('F d, Y') }} by <strong>Webura Company</strong></p>
                <img src="{{ asset($blog->image) }}" alt="Tech and Media Image" style="object-fit: contain; margin-bottom: 50px;">
                {!! $blog->content !!}
                <div class=" mt-4">
                    <a href="{{ route('webura.blog') }}" class="btn btn-back">Back to Blog</a>
                </div>
            </div>
        </div>
    </section>

@endsection
