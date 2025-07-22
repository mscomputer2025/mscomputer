@extends('master.master')

@section('title', 'Home')

@section('content')
    <div class="hero">
        <div>
            <h1 class="display-3 fw-bold">Empowering Futures Through Technology</h1>
            <p class="lead">Simple. Practical. Professional Computer Education.</p>
        </div>
    </div>
    <section class="py-5  text-center">
        <div class="container">
            <h2 class="fw-bold mb-5 heading-styled">Choose the Right Course for Your Future</h2>
            <div class="row g-4 justify-content-center">
                @php
                    $courses = [
                        ['icon' => 'laptop', 'title' => 'Basic Computer Course'],
                        ['icon' => 'cash-stack', 'title' => 'Financial Accounting'],
                        ['icon' => 'brush', 'title' => 'DTP (Desktop Publishing)'],
                        ['icon' => 'windows', 'title' => 'Microsoft Office Course'],
                        ['icon' => 'award', 'title' => 'PGDCA (Post Graduate Diploma)'],
                        ['icon' => 'cpu', 'title' => 'ADIT (Advance Diploma in IT)'],
                        ['icon' => 'code-slash', 'title' => 'Web Development'],
                        ['icon' => 'palette', 'title' => 'Web Designing'],
                        ['icon' => 'file-earmark-code', 'title' => 'Diploma in Computer Application'],
                        ['icon' => 'calculator', 'title' => 'Advance Diploma in Accounting'],
                    ];
                  @endphp

                @foreach ($courses as $course)
                    <div class="col-6 col-md-4 col-lg-3 ">
                        <div class="course-box p-4 shadow rounded-4 h-100 transition-hover">
                            <div class="mb-3">
                                <i class="bi bi-{{ $course['icon'] }} fs-1  text-dark "></i>
                            </div>
                            <h6 class="fw-semibold text-dark">{{ $course['title'] }}</h6>
                        </div>
                    </div>
                @endforeach
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