@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Update Settings for {{ $user->name }}</h2>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="notification_switch">Enable Notifications:</label>
            <input type="checkbox" name="notification_switch" id="notification_switch" {{ $user->notification_switch ? 'checked' : '' }}>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text"  name="phone_number" id="phone_number" class="form-control" value="{{ $user->phone_number }}">
        </div>
        <button type="submit" class="btn btn-primary">Update Settings</button>
    </form>
</div>
@endsection
