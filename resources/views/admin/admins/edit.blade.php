@extends('admin.master')
@section('title', 'Edit Admin | ' . env('APP_NAME'))

@section('content')

    <h2>Edit Admin</h2>

    <form action="{{ route('admin.admins.update', $admin->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name') ?? $admin->name }}"
                class="form-control @error('name')
            is-invalid
        @enderror">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-2">
            <label for="email">Email</label>
            <input type="text" name="email" id="email" placeholder="Email"
                value="{{ old('email') ?? $admin->email }}"
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
