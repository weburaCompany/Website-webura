@extends('admin.master')
@section('title', 'Change Password | ' . env('APP_NAME'))

@section('content')

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <form action="{{ route('auth.changePassword') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="oldPassword">Old Password</label>
            <input type="password" name="oldPassword" id="oldPassword" placeholder="Old Password"
                class="form-control @error('oldPassword')
        is-invalid
    @enderror">
            @error('oldPassword')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-2">
            <label for="newPassword">New Password</label>
            <input type="password" name="newPassword" id="newPassword" placeholder="New Password"
                class="form-control @error('newPassword')
        is-invalid
    @enderror">
            @error('newPassword')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-2">
            <label for="newPassword_confirmation">New Password</label>
            <input type="password" name="newPassword_confirmation" id="newPassword_confirmation"
                placeholder="New Password Confirmation" class="form-control">
        </div>
        <button class="btn btn-success">Submit</button>
    </form>

@endsection
