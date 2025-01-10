@extends('admin.master')
@section('title', 'Create Admin | ' . env('APP_NAME'))

@section('content')

    <h2>Create Admin</h2>

    <form action="{{ route('admin.admins.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') }}"
                class="form-control @error('name')
            is-invalid
        @enderror">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                class="form-control @error('email')
            is-invalid
        @enderror">
            @error('email')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" value="{{ old('password') }}"
                class="form-control @error('password')
            is-invalid
        @enderror">
            @error('password')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="password_confirmation">Password Confirmation</label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                placeholder="Password Confirmation" value="{{ old('password') }}"
                class="form-control @error('email')
            is-invalid
        @enderror">
            @error('password_confirmation')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <button class="btn btn-success">Submit</button>
    </form>

@endsection
