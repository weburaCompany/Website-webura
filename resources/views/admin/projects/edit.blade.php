@extends('admin.master')
@section('title', 'Edit Project | ' . env('APP_NAME'))

@section('content')

    <h2>Edit Project</h2>

    <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('Put')

        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $project->name) }}"
                class="form-control @error('name')
            is-invalid
        @enderror">
            @error('name')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="image">Image</label>
            <input type="file" name="image" id="image"
                class="form-control @error('image')
            is-invalid
        @enderror">
            @error('image')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <h4>Current Image: </h4>
            <img src="{{ asset($project->image) }}" height="200" width="200">
        </div>

        <div class="mb-2">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Description"
                class="form-control @error('description')
                is-invalid
            @enderror">{{ old('description', $project->description) }}</textarea>
            @error('description')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-4">
            <label for="link">Link</label>
            <input type="text" name="link" id="link" placeholder="Link" value="{{ old('link', $project->link) }}"
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
