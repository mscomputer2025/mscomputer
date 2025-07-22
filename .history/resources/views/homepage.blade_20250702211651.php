@extends('master.master')

@section('title', 'Home')

@section('content')
    <div class="hero">
        <div>
            <h1 class="display-3 fw-bold">Empowering Futures Through Technology</h1>
            <p class="lead">Simple. Practical. Professional Computer Education.</p>
        </div>
    </div>
  <section class="py-5 text-center">
    <div class="container">
        <h2 class="fw-bold mb-5 heading-styled">Choose the Right Course for Your Future</h2>

        <div class="d-flex flex-nowrap overflow-auto px-3">
            @php
                $courses = [
                    ['icon' => 'laptop', 'title' => 'Basic Computer Course'],
                    ['icon' => 'cash-stack', 'title' => 'Financial Accounting'],
                    ['icon' => 'brush', 'title' => 'DTP (Desktop Publishing)'],
                    ['icon' => 'windows', 'title' => 'Microsoft Office Course'],
                ];
            @endphp

            @foreach ($courses as $course)
                <a href="{{ url('/courses') }}" class="text-decoration-none me-3 flex-shrink-0" style="width: 240px;">
                    <div class="course-box p-3 shadow rounded-4 h-100 transition-hover">
                        <div class="mb-3">
                            <i class="bi bi-{{ $course['icon'] }} fs-1 text-dark"></i>
                        </div>
                        <h6 class="fw-semibold text-dark">{{ $course['title'] }}</h6>
                    </div>
                </a>
            @endforeach

            <!-- View All Box -->
            <a href="{{ url('/courses') }}" class="text-decoration-none flex-shrink-0" style="width: 240px;">
                <div class="course-box p-3 shadow rounded-4 h-100 d-flex flex-column justify-content-center align-items-center transition-hover">
                    <div class="mb-2">
                        <i class="bi bi-three-dots fs-1 text-secondary"></i>
                    </div>
                    <h6 class="fw-semibold text-secondary">View All Courses</h6>
                </div>
            </a>
        </div>
    </div>
</section>



    <section class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center mx-3">
                <div class="col-md-6">
                    <h2 class="fw-bold mb-4">About MS COMPUTER EDUCATION</h2>
                    <p>MS Computer Institute, established in 2018 near Muhammadpura Circle, Bharuch (Gujarat), is an ISO
                        9001:2015 certified institute recognized by the Government of India.</p>
                    <p>We are committed to delivering quality education to students, professionals, businessmen, housewives,
                        and working individuals. Our goal is to make computer literacy accessible and practical through
                        easy-to-learn structured training.</p>
                    <p>Located in a dynamic industrial region, we provide real-world exposure, instill professional values,
                        and encourage technical excellence through disciplined, hands-on learning.</p>
                    <p>We believe in nurturing dreams, shaping young minds, and preparing students to thrive in their
                        careers through technical empowerment, moral integrity, and personal growth.</p>
                </div>
                <div class="col-md-6 text-center">
                    <img src="{{ asset('images/aboutusposter.png') }}" alt="MS Computer Institute"
                        class="img-fluid rounded-3 shadow about-image">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5  text-center">
        <div class="container">
            <h2 class="fw-bold mb-4 typewriter">Certified & Authenticated By</h2>

            <div class="row justify-content-center align-items-center g-4">
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('images/iaf.jpg') }}" alt="IAF Logo" class="img-fluid cert-logo">
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('images/msme.png') }}" alt="MSME Logo" class="img-fluid cert-logo">
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <img src="{{ asset('images/itct.jpg') }}" alt="ITCT Logo" class="img-fluid cert-logo">
                </div>
            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-left fw-bold mb-5">Our Vision & Mission</h2>

            <div class="row g-4 align-items-stretch">

                <!-- Vision -->
                <div class="col-md-6">
                    <div class="p-4 shadow rounded-4 h-100 bg-light border-start border-4 border-primary">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-eye-fill fs-2 text-primary me-2"></i>
                            <h4 class="mb-0 fw-semibold">Our Vision</h4>
                        </div>
                        <p class="mb-0 text-secondary">
                            MS Computer Institute imparts holistic education to young men and women to become responsible
                            citizens of their motherland, India. It assists young people in developing themselves
                            intellectually, physically, technically, and culturally while encouraging growth in virtue and
                            wisdom. It inculcates sound principles of self-discipline, efficiency, and self-reliance,
                            preparing them to excel academically and contribute to research and innovation.
                        </p>
                    </div>
                </div>

                <!-- Mission -->
                <div class="col-md-6">
                    <div class="p-4 shadow rounded-4 h-100 bg-light border-start border-4 border-success">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi bi-bullseye fs-2 text-success me-2"></i>
                            <h4 class="mb-0 fw-semibold">Our Mission</h4>
                        </div>
                        <p class="mb-0 text-secondary">
                            To nurture dreams and shape lives, to awaken latent potential and stoke the passion for
                            technical excellence. MS Computer opens new horizons for young people through a time-tested
                            educational system based on conviction, prevention of faults, and constructive, paternal
                            guidance.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="py-5 bg-white">
        <div class="container">
            <h2 class="text-center fw-bold mb-4">Director's Message</h2>

            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div id="quoteCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000"
                        data-bs-pause="hover">
                        <div class="carousel-inner text-center">
                            <div class="carousel-item active">
                                <i class="bi bi-lightbulb fs-1 text-warning mb-3 d-block"></i>
                                <p class="fs-5 px-3">Education shapes civilization and pushes humanity forward. We are here
                                    to help our youth experience the future.</p>
                            </div>
                            <div class="carousel-item">
                                <i class="bi bi-star-fill fs-1 text-primary mb-3 d-block"></i>
                                <p class="fs-5 px-3">Excellence and value are not just our principles, but our promise to
                                    every student that walks through our doors.</p>
                            </div>
                            <div class="carousel-item">
                                <i class="bi bi-rocket fs-1 text-danger mb-3 d-block"></i>
                                <p class="fs-5 px-3">We nurture dreams, develop skills, and help youth become self-reliant
                                    and ethically strong professionals.</p>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#quoteCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#quoteCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <footer class="blockquote-footer text-center mt-4">
                        <strong>Mustaq Ahmed Shaikh</strong>, <cite title="Director">Director, MS COMPUTER INSTITUTE</cite>
                    </footer>

                </div>
            </div>
        </div>
    </section>


@endsection