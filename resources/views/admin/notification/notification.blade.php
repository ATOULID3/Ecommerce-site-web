@extends('admin.admin-layout.style')
@section('title')
    notification
@endsection
@section('contentt')
<div class="container">
    <h1>All Notifications</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <form action="{{ route('notifications.markAllAsRead') }}">
            @csrf
            <button type="submit" class="btn btn-primary">Mark All as Read</button>
        </form>
    </div>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Client</th>
                <th>Total Price</th>
                <th>Status</th>
                <th>Time</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($notifications as $notification)
                <tr>
                    <td>{{ $notification->data['customer_name'] ?? 'Client' }}</td>
                    <td>{{ $notification->data['total_price'] ?? 'No message content' }} $</td>
                    <td>{{ $notification->read_at ? 'Read' : 'Unread' }}</td>
                    <td>{{ $notification->created_at->diffForHumans() }}</td>
                    <td>
                        @if(!$notification->read_at)
                            <form action="{{ route('notifications.read', $notification->id) }}" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-success">Mark as Read</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">No notifications found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    {{ $notifications->links() }}
</div>
@endsection
