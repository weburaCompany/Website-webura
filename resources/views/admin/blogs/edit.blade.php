@extends('admin.master')
@section('title', 'Edit Blog | ' . env('APP_NAME'))

@section('content')

    <h2>Edit Blog</h2>


    <form action="{{ route('admin.blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
        @csrf @method('PUT')

        <div class="mb-2">
            <label for="title">Title</label>
            <input type="text" name="title" id="title" placeholder="Title" value="{{ old('title', $blog->title) }}"
                class="form-control @error('title')
            is-invalid
        @enderror">
            @error('title')
                <small class="invalid-feedback">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-2">
            <label for="content">Content</label>
            <textarea name="content" id="content" placeholder="Content"
                class="form-control @error('content')
                is-invalid
            @enderror">{{ old('content', $blog->content) }}</textarea>
            @error('content')
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
            <img src="{{ asset($blog->image) }}" alt="" height="200" width="200">
        </div>

        <div class="mb-2">
            <label for="publishDate">Publish Date</label>
            <input type="date" name="publishDate" id="publishDate" value="{{ old('publishDate', $blog->publish_date) }}"
                class="form-control @error('publishDate')
            is-invalid
        @enderror">
            @error('publishDate')
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
