@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->name }}'s Notifications</h1>
        <ul>
            @foreach ($notifications as $notification)
                <li>
                    {{ $notification->content }} <br>
                    <a href="{{ route('notifications.markAsRead', $notification->id) }}">Mark as Read</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
