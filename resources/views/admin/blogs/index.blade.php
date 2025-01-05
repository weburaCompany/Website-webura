@extends('admin.master')
@section('title', 'Blogs | ' . env('APP_NAME'))

@section('content')

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Publish Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($blogs as $blog)
                <tr>
                    <td>{{ $blog->id }}</td>
                    <td>{{ $blog->title }}</td>
                    <td>{!! $blog->content !!}</td>
                    <td><img src="{{ asset($blog->image) }}" alt="" height="100" width="100"></td>
                    <td>{{ $blog->publish_date }}</td>
                    <td>
                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <hr>
                        <form class="d-inline" action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th class="text-center" colspan="6">No Data Found.</th>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $blogs->links() }}










@endsection
