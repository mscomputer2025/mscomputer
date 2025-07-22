<div class="bg-danger py-1 border-bottom">
    <div class="container-fluid  text-white py-2">
        <div class="row justify-content-center text-center text-md-start">
            <div class="col-12 col-md-auto mb-1 mb-md-0 me-md-4">
                <i class="bi bi-telephone"></i> +91 7043037076 | +91 7600991605
            </div>
            <div class="col-12 col-md-auto">
                <i class="bi bi-geo-alt"></i> Ankleshwar | Bharuch, Gujarat
            </div>
        </div>
    </div>

</div>
<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container-fluid mx-4">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.jpeg') }}" alt="Institute Logo" width="70" height="100" class="img-fluid">
            <span class="ms-2 fw-bolder" style="color: #0a217e;">MS COMPUTER</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('courses') ? 'active' : '' }}" href="#"
                        id="coursesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Courses
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="coursesDropdown">
                        @foreach($allCourses as $course)
                        <li>
                            <a class="dropdown-item" href="{{ route('courses.show', $course->course_id) }}">
                                {{ $course->course_title }}
                            </a>
                        </li>
                        @endforeach
                    </ul>


                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('aboutus') ? 'active' : '' }}" href="{{ url('/aboutus') }}">About
                        Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('gallery') ? 'active' : '' }}"
                        href="{{ url('/gallery') }}">Gallery</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}"
                        href="{{ url('/contactus') }}">Contact Us</a>
                </li>
                 <li class="nav-item">
                    <a class="nav-link {{ request()->is('login') ? 'active' : '' }}"
                        href="{{ url('/login') }}">Login</a>
                </li>


            </ul>
        </div>
    </div>
</nav>