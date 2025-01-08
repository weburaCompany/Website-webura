@extends('admin.master')
@section('title', 'Feedbacks | ' . env('APP_NAME'))

@section('content')

    @if (session('msg'))
        <div class="alert alert-{{ session('type') }}">
            {{ session('msg') }}
        </div>
    @endif

    <table class="table table-bordered table-hover table-striped">

        <thead>
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Image</th>
                <th>Content</th>
                <th>Actions</th>
            </thead>
        <tbody>
            @forelse ($feedbacks as $feedback)
                <tr>
                    <td>{{ $feedback->id }}</td>
                    <td>{{ $feedback->name }}</td>
                    <td><img src="{{ asset($feedback->image) }}" height="100" width="100"></td>
                    <td>{!! $feedback->content !!}</td>
                    <td>
                        <a href="{{ route('admin.feedbacks.edit', $feedback->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <form class="d-inline" action="{{ route('admin.feedbacks.destroy', $feedback->id) }}" method="POST">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <th colspan="5" class="text-center">No Data Found.</th>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $feedbacks->links() }}











@endsection
