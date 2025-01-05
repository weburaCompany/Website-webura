@extends('admin.master')
@section('title', 'Create Project | ' . env('APP_NAME'))

@section('content')

    <h2>Create Project</h2>

    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
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
            <label for="image">Image</label>
            <input type="file" name="image" id="image"
                class="form-control @error('image')
            is-invalid
        @enderror">
            @error('image')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Description"
                class="form-control @error('description')
                is-invalid
            @enderror">{{ old('description') }}</textarea>
            @error('description')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="link">Link</label>
            <input type="text" name="link" id="link" placeholder="Link" value="{{ old('link') }}"
                class="form-control @error('link')
            is-invalid
        @enderror">
            @error('link')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <button class="btn btn-success">Submit</button>

    </form>

@endsection

@section('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/7.0.1/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: ['code']
        });
    </script>


@endsection

