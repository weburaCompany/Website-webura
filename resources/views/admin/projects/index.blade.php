@extends('admin.master')
@section('title', 'Projects | ' . env('APP_NAME'))

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
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Link</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td><img src="{{ asset($project->image) }}" alt="" height="100" width="100"></td>
                    <td>{!! $project->description !!}</td>
                    <td><a href="{{ $project->link }}" target="__blank">{{ $project->link }}</a></td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-sm btn-primary"><i
                                class="fas fa-edit"></i></a>
                        <hr>
                        <form class="d-inline" action="{{ route('admin.projects.destroy', $project->id) }}" method="POST">
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
    {{ $projects->links() }}










@endsection
