@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Unread Notifications Count</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)

                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->notifications_count }}</td>
                    <td>
                        <a href="{{ route('users.impersonate', $user->id) }}">Show</a> |
                        <a href="{{ route('users.settings', $user->id) }}">Settings</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
