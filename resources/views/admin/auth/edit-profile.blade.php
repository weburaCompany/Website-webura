@extends('admin.master')
@section('title', 'Edit Profile | ' . env('APP_NAME'))

@section('content')

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <form action="{{ route('auth.editProfile') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name"
                value="{{ old('name') ?? auth('admin')->user()->name }}"
                class="form-control @error('name')
        is-invalid
    @enderror">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="email"
                value="{{ old('email') ?? auth('admin')->user()->email }}"
                class="form-control @error('email')
        is-invalid
    @enderror">
            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-success">Submit</button>
    </form>

@endsection
