<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - MS Admin Panel</title>

    <link rel="stylesheet" href="{{ asset('css/admin-master.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-3" style="width: 250px; min-height: 100vh; position: fixed;">
            <h4 class="text-center py-3 border-bottom border-secondary">MS Panel</h4>

            @if(session('user_role') === 'admin')
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-people"></i> Students</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-journal-text"></i> Courses</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-star"></i> Reviews</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-gear"></i> Settings</a>
            @elseif(session('user_role') === 'student')
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-speedometer2"></i> Dashboard</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-person-lines-fill"></i> My Profile</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-book"></i> My Courses</a>
                <a href="#" class="d-block py-2 text-white"><i class="bi bi-star-half"></i> Feedback</a>
            @endif

            <a href="{{ route('logout') }}" class="d-block py-2 mt-4 text-danger"><i class="bi bi-box-arrow-right"></i> Logout</a>
        </div>

        <!-- Main Content -->
        <div class="flex-grow-1 p-4" style="margin-left: 250px; background-color: #f9f9f9; min-height: 100vh;">
            @yield('content')
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

