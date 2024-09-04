@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Notification</h2>
    <form action="{{ route('notifications.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">Select User (leave blank for all users):</label>
            <select name="user_id" id="user_id" class="form-control">
                <option value="">All Users</option>
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <select name="type" id="type" class="form-control" required>
                <option value="marketing">Marketing</option>
                <option value="invoices">Invoices</option>
                <option value="system">System</option>
            </select>
        </div>
        <div class="form-group">
            <label for="text">Content:</label>
            <textarea name="content" id="content" class="form-control" required></textarea>
        </div>
        <div class="form-group">
            <label for="expiration">Expiration:</label>
            <input type="datetime-local" name="expiration" id="expiration" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Create Notification</button>
    </form>
</div>
@endsection
