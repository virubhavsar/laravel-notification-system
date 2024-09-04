<!-- resources/views/users/settings.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Notification Settings</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="notification_switch">Notifications</label>
            <input type="checkbox" id="notification_switch" name="notification_switch" {{ old('notification_switch', $user->notification_switch) ? 'checked' : '' }}>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $user->phone) }}">
        </div>

        <button type="submit" class="btn btn-primary">Save Settings</button>
    </form>
</div>
@endsection
