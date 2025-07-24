<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Panel</title>
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/admin-master.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    @livewireStyles

</head>

<body>

    <button class="toggle-btn d-md-none" onclick="toggleSidebar()">
        <i class="bi bi-list"></i>
    </button>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        @if(Auth::guard('admin')->check())
        <div class="sidebar-brand d-flex align-items-center mb-4">
            <h4 class="mb-0 text-white">Admin Panel</h4>
        </div>
        <a href="#" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-people me-2"></i> Students</a>
        <a href="#"><i class="bi bi-journal-text me-2"></i> Courses</a>
        <a href="#"><i class="bi bi-star me-2"></i> Reviews</a>
        <a href="#"><i class="bi bi-cash-coin me-2"></i> Payments</a>
        <a href="#"><i class="bi bi-award me-2"></i> Certificates</a>
        <a href="#"><i class="bi bi-buildings me-2"></i> Branches</a>
        <a href="#"><i class="bi bi-gear me-2"></i> Settings</a>
        @elseif(Auth::guard('student')->check())
        <div class="sidebar-brand d-flex align-items-center mb-4">
            <h4 class="mb-0 text-white">Student Panel</h4>
        </div>
        <a href="#" class="active"><i class="bi bi-speedometer2 me-2"></i> Dashboard</a>
        <a href="#"><i class="bi bi-person-lines-fill me-2"></i> My Profile</a>
        <a href="#"><i class="bi bi-book me-2"></i> My Courses</a>
        <a href="#"><i class="bi bi-star-half me-2"></i> Feedback</a>
        <a href="#"><i class="bi bi-award me-2"></i> My Certificate</a>
        @endif

        <!-- Logout button -->
        <div class="logout">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </div>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>
</body>

</html>