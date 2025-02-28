@extends('site.master')
@section('title', 'Coming Soon | ' . env('APP_NAME'))

@section('content')

    <section class="soon" style="padding: 50px 0;">
        <div class="container text-center">
            <img src="{{ asset('site-assets/images/soon.png') }}" alt="" width="40%"> <br>
            <a data-mdb-ripple-init class="btn btn-primary mt-2" href="{{ route('webura.index') }}" role="button">Back To Home
            </a>
        </div>
    </section>

@endsection
