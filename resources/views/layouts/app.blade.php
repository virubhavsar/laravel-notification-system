<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Notifications</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Laravel Notifications App</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ route('users.index') }}" class="nav-link">Users</a></li>
                <li class="nav-item"><a href="{{ route('notifications.index') }}" class="nav-link">Notifications</a></li>
                <li class="nav-item"><a href="{{ route('notifications.create') }}" class="nav-link">Create Notification</a></li>
            </ul>
        </div>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>
