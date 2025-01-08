@extends('admin.master')
@section('title', 'Create Feedbacks | ' . env('APP_NAME'))

@section('content')

    <form action="{{ route('admin.feedbacks.update', $feedback->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-2">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{ old('name', $feedback->name) }}"
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
            <img src="{{ asset($feedback->image) }}" height="200" width="200">
        </div>


        <div class="mb-2">
            <label for="content">Content</label>
            <textarea name="content" id="content" placeholder="Content"
                class="form-control @error('content')
                is-invalid
            @enderror">{{ old('content', $feedback->content) }}</textarea>
            @error('content')
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