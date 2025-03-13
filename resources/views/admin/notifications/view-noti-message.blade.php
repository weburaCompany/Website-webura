@extends('admin.master')
@section('title', 'Notification Message | ' . env('APP_NAME'))


@section('content')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">New Message</h5>
                        <p class="card-text"><strong>From:</strong> {{ $notification->data['name'] }}</p>
                        <p class="card-text"><strong>Email:</strong> {{ $notification->data['email'] }}</p>
                        @if (isset($notification->data['phone']))
                            <p class="card-text"><strong>Phone:</strong> {{ $notification->data['phone'] }}</p>
                        @endif
                        @if (isset($notification->data['company']))
                            <p class="card-text"><strong>Company:</strong> {{ $notification->data['company'] }}</p>
                        @endif
                        <hr>
                        <p class="card-text"><strong>Message:</strong></p>
                        <p class="card-text">{{ $notification->data['message'] }}</p>
                    </div>
                    <div class="card-footer text-muted">
                        {{ $notification->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection
