@extends('admin.master')

@section('title', 'Notifications | ' . env('APP_NAME'))

@section('styles')

    <style>
        .notification-list {
            list-style: none;
            padding: 0;
            margin: 20px;
            width: 75%;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            font-family: sans-serif;
        }

        .notification-item {
            padding: 15px;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
            text-decoration: none;
            /* remove default underline */
            color: inherit;
            /* inherit color from parent */
            display: block;
            /* Make the link fill the entire li*/
        }

        .notification-item:last-child {
            border-bottom: none;
        }

        .notification-icon {
            margin-right: 10px;
            font-size: 20px;
            color: #007bff;
        }

        .notification-message {
            flex-grow: 1;
        }

        .notification-time {
            font-size: 0.8em;
            color: #888;
            margin-left: 10px;
        }

        .notification-item.unread {
            background-color: #f0f8ff;
        }

        .notification-item.unread .notification-message {
            font-weight: bold;
        }

        .notification-item:hover {
            background-color: #f8f8f8;
            /* Add a subtle hover effect */
            color: blue;
            text-decoration: none;
        }
    </style>
@endsection

@section('content')


    <h2 class="mb-5">Notification Center ({{ Auth::user()->unreadnotifications->count() }})</h2>

    <table class="table table-bordered table-hover table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($notifications as $n)
                <tr class="{{ $n->read_at == null ? 'table-secondary' : '' }}">
                    <td>{{ $n->data['name'] }}</td>
                    <td>{{ $n->data['email'] }}</td>
                    <td>{{ $n->data['phone'] }}</td>
                    <td>{{ $n->data['company'] }}</td>
                    <td><a href="{{ route('admin.view-notification-message', $n->id) }}">Click to view message</a></td>
                </tr>
            @empty
                <tr>
                    <th class="text-center" colspan="5">No Data Found.</th>
                </tr>
            @endforelse
        </tbody>
    </table>
    {{ $notifications->links() }}














@endsection
