@extends('master.master')

@section('title', 'About Us')

@section('content')

    <!-- Hero Banner -->
    <div class="container p-0">
        <img src="{{ asset('images/aboutus.jpg') }}" class="img-fluid" style="max-height: 400px; object-fit: cover;"
            alt="MS Computer Institute">
    </div>

    <!-- About Section -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-center mx-3">
              
                <div class="col-lg-8">
                    <h2 class="fw-bold text-dark">MS Computer Institute </h2>
                    <p class="text-muted">
                        Established in 2018 near Muhammadpura Circle, Bharuch, MS Computer Institute is an ISO 9001:2015
                        certified academy, proudly accredited by the Government of India. Located in an industrial hub, our
                        institute is deeply rooted in the mission of delivering quality, practical computer education with a
                        strong corporate exposure. We are committed to empowering students, professionals, homemakers, and
                        aspiring entrepreneurs by equipping them with essential digital skills in a fast-evolving
                        technological landscape.
                    </p>
                    <p class="text-muted">
                        Our vision is to create responsible citizens by nurturing intellectual, technical, and ethical
                        excellence. At MS Computer Institute, education goes beyond textbooks—we cultivate self-discipline,
                        curiosity, and confidence in our learners. With a dedicated faculty, modern curriculum, and a
                        learner-friendly environment, we ensure that each student gains not just knowledge, but the courage
                        to transform their future.
                    </p>
                    <p class="text-muted mb-0">
                        Whether you're just beginning your computer journey or aiming to specialize in areas like Tally, MS
                        Office, DTP, or advanced software tools, MS Computer Institute offers personalized learning that
                        prepares you for real-world success. Join us, and experience a learning path that is practical,
                        accessible, and designed for lifelong impact.
                    </p>
                </div>
                  <div class="col-lg-4 mb-4 mb-lg-0">
                    <img src="{{ asset('images/mscomputer.jpeg') }}" class="img-fluid  shadow" alt="Institute">
                </div>
            </div>
        </div>
    </section>

    <!-- Goals and Objectives -->
    <section class="py-5">
        <div class="container">
            <h3 class="text-center fw-bold mb-4 text-">Our Goals and Objectives</h3>
            <div class="row mx-3">
                <div class="col-md-12">
                    <p class="text-muted">We aim to train young men and women of quality to be leaders in life. Our mission
                        is to promote justice, truth, and love while fostering intellectual growth, moral integrity, and
                        social responsibility—especially for underprivileged sections of society.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-4 mx-3">
                <div class="col-md-6">
                    <h4 class="fw-semibold ">Our Vision</h4>
                    <p class="text-muted">We aspire to provide holistic education to young people, helping them grow
                        intellectually, technically, and culturally. We strive to shape responsible Indian citizens prepared
                        to excel with wisdom, self-discipline, and efficiency.</p>
                </div>
                <div class="col-md-6">
                    <h4 class="fw-semibold">Our Mission</h4>
                    <p class="text-muted">MS Computer Institute nurtures dreams and ignites a passion for excellence. With a
                        student-centered and time-tested educative method, we focus on discipline, prevention of faults, and
                        personal development to prepare students for the 21st century.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Director's Message -->
    <section class="py-5">
        <div class="container">
            <div class="row align-items-start mx-3">
                <div class="col-lg-4 mb-4">
                    <img src="{{ asset('images/director.jpg') }}" class="img-fluid rounded-circle shadow" alt="Director"
                        style="max-height: 300px;">
                </div>
                <div class="col-lg-8">
                    <h4 class="fw-bold text-dark">Message from the Director</h4>
                    <p class="text-muted fst-italic">"Education shapes human civilization and builds a future-ready society.
                        At MS Computer Institute, we believe in empowering youth with the skills and confidence to thrive in
                        a competitive world. Excellence and ethical values are our cornerstones."</p>
                    <p class="mb-1 fw-semibold">Mustaq Ahmed Shaikh</p>
                    <p class="text-muted">Director, MS Computer Institute</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5  text-white text-center" style="background-color: rgb(212 212 240) !important;">
        <div class="container">
            <h3 class="fw-bold mx-3">Join Us Today to Build Your Bright Future in IT!</h3>
            <p class="lead mx-3">Learn, Practice, and Grow with MS Computer Institute</p>
            <a href="{{ url('/contact') }}" class="btn btn-light mt-3 mx-3">Contact Us</a>
        </div>
    </section>

@endsection