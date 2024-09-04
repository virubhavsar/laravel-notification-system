<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel User Notification System</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8fafc;
            color: #636b6f;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
            margin-bottom: 30px;
        }
        .links > a {
            color: #2e00ff;
            padding: 0 25px;
            font-size: 15px;
            font-weight: 600;
            text-decoration: none;
            text-transform: uppercase;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="title">
            Notification System
        </div>

        <div class="description">
            <p>Welcome to the Laravel Notification System!</p>

        </div>

        <div class="links">
            <a href="{{ route('users.index') }}">Manage Users</a>
            <a href="{{ route('notifications.index') }}">View Notifications</a>
            <a href="{{ route('notifications.create') }}">Create a Notification</a>
        </div>
    </div>
</body>
</html>
