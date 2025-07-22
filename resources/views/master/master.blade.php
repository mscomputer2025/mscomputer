<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="shortcut icon" href="logo.jpeg" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@600&family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Geologica' rel='stylesheet'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>MS COMPUTER - @yield('title')</title>
</head>

<body style="font-family: 'Geologica';">

    @if (!Request::is('login') && !Request::is('student/register') && !Request::is('admin/register') )
    @include('master.header')
    @endif

    @yield('content')

    @if (!Request::is('login') && !Request::is('student/register') && !Request::is('admin/register') )
    @include('master.footer')
    @endif

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const scrollContainer = document.querySelector('.custom-scroll');
            let scrollAmount = 0;

            function autoScrollCourses() {
                if (!scrollContainer) return;

                const maxScrollLeft = scrollContainer.scrollWidth - scrollContainer.clientWidth;
                scrollAmount += 270;

                if (scrollAmount > maxScrollLeft) {
                    scrollAmount = 0;
                }

                scrollContainer.scrollTo({
                    left: scrollAmount,
                    behavior: 'smooth'
                });
            }

            setInterval(autoScrollCourses, 3000);
        });
    </script>
    <!-- rating in course leave reply form -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star');
            const ratingInput = document.getElementById('ratingInput');

            stars.forEach(star => {
                star.addEventListener('click', function() {
                    const value = this.getAttribute('data-value');
                    ratingInput.value = value;
                    stars.forEach(s => {
                        s.classList.remove('bi-star-fill');
                        s.classList.add('bi-star');
                    });
                    for (let i = 0; i < value; i++) {
                        stars[i].classList.remove('bi-star');
                        stars[i].classList.add('bi-star-fill');
                    }
                });
            });
        });
    </script>

    <!-- show password -->
    <script>
        function togglePassword(id) {
            const input = document.getElementById(id);
            const icon = document.getElementById('eye_' + id);
            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove('bi-eye');
                icon.classList.add('bi-eye-slash');
            } else {
                input.type = "password";
                icon.classList.remove('bi-eye-slash');
                icon.classList.add('bi-eye');
            }
        }
    </script>

</body>

</html>