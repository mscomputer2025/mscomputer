<nav class="navbar navbar-expand-lg navbar-light shadow-sm">
    <div class="container mx-3">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('logo.jpeg') }}" alt="Institute Logo" width="70" height="100" class="img-fluid">
            <span class="ms-2 fw-bold">MS COMPUTER</span>
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
                        <li><a class="dropdown-item" href="#">Basic Computer</a></li>
                        <li><a class="dropdown-item" href="#">PGDCA</a></li>
                        <li><a class="dropdown-item" href="#">ADIT</a></li>
                        <li><a class="dropdown-item" href="#">Web Development & Designing</a></li>
                        <li><a class="dropdown-item" href="#">Tally GST</a></li>
                        
                        <li><a class="dropdown-item" href="#">Graphic Design</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" href="{{ url('/about') }}">About
                        Us</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}"
                        href="{{ url('/contactus') }}">Contact Us</a>
                </li>

            </ul>
        </div>
    </div>
</nav>