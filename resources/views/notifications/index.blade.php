@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Notifications List</h2>
    <table class="table">
        <thead>
            <tr>
                <th>User</th>
                <th>Type</th>
                <th>Content</th>
                <th>Is Read</th>
                <th>Expiration</th>
            </tr>
        </thead>
        <tbody>
            @foreach($notifications as $notification)
            <tr>
                <td>{{ $notification->user->name }}</td>
                <td>{{ ucfirst($notification->type) }}</td>
                <td>{{ $notification->content }}</td>
                <td>{{ $notification->is_read ? 'Yes' : 'No' }}</td>
                <td>{{ $notification->expiration ? $notification->expiration->format('Y-m-d H:i') : 'No Expiration' }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
