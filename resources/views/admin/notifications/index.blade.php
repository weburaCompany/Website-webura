@extends('admin.master')

@section('title', 'Notifications | ' . env('APP_NAME'))

@section('content')


    <h1>Notification Center</h1>

    <div class="list-group mt-5">
        @foreach (Auth::user()->notifications as $noti)
            <a href="#" class="list-group-item list-group-item-action {{ $noti->read_at == null ? 'active' : '' }}" aria-current="true">
                Name: {{ $noti->data['name'] }} <br>
                Email: {{ $noti->data['email'] }} <br>
                Company: {{ $noti->data['company'] }} <br>
                Message: {{ $noti->data['message'] }}
            </a>
        @endforeach

        {{-- <a href="#" class="list-group-item list-group-item-action">A fourth link item</a> --}}
    </div>













@endsection
