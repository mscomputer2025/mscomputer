@extends('master.master')

@section('title', 'Home')

@section('content')
<div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">

        {{-- Slide 1 --}}
        <div class="carousel-item active">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/herosection.jpeg') }}');">
                <div class="text-center text-white">
                    <h1 class="display-3 fw-bold">Empowering Futures Through Technology</h1>
                    <p class="lead">Simple,Practical,Professional Computer Education.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/hero2.webp') }}');">
                <div class="text-center text-white">
                    <h1 class="display-3 fw-bold">Shaping Digital Minds</h1>
                    <p class="lead">From Basics to Advanced Learning</p>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="hero d-flex align-items-center justify-content-center" style="background-image: url('{{ asset('images/hero3.jpg') }}');">
                <div class="text-center text-white">
                    <h1 class="display-3 fw-bold">Build Skills Today for a Successful Tomorrow</h1>
                    <p class="lead">Future-Proof Your Skills with MS Computer</p>
                </div>
            </div>
        </div>

    </div>
    <div class="bg-primary text-white py-2">
        <marquee behavior="scroll" direction="left">
            🎓 Our institute offers 400+ courses with certification! ✅ Certificate valid in all Govt. Sectors. 🏛️ Online Certificate Verification (OTP Based) 🔐 | 👜 ITCT Bags & 📚 Study Material Available | 🖥️ Online/Offline Examination | 🚀 Building Successful Careers since 1999! 🌟
        </marquee>
    </div>

    {{-- Optional Controls --}}
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<section class="pt-5 bg-white text-center">
    <div class="container">
        <h2 class="fw-bold  text-dark">Welcome to MS Computer Education</h2>
        <p class="lead text-muted mx-auto" style="max-width: 900px;">
            At <strong>MS Computer Institute</strong>, we believe education is not just about learning software—it’s about empowering individuals to excel in a digital world. Established in 2018 and ISO 9001:2015 certified, our institute provides industry-relevant computer education tailored for students, professionals, and entrepreneurs. We offer hands-on, career-oriented training to help you succeed in today’s competitive world.
        </p>
    </div>
</section>


<section class="py-5 text-center my-5" style="background-image:url('{{ asset('images/course.jpg') }}');background-size:cover;background-repeat:no-repeat;background-position:center; background-attachment:fixed;">
    <div class="container">
        <h2 class="fw-bold mb-5 pt-5 text-white">What Do You Want to Study?</h2>

        <div class="d-flex flex-nowrap overflow-auto px-3 gap-4 justify-content-start custom-scroll">
            @foreach ($courses as $course)
                <a href="{{ route('courses.show', $course->course_id) }}" class="text-decoration-none">
                    <div class="course-card flex-shrink-0" style="width: 250px;">
                        <div class="card-content">
                            <div class="card-overlay text-white d-flex flex-column align-items-center justify-content-center text-center px-2" style="background-color: rgba(66, 115, 161, 0.8); height: 75%;">
                                <i class="bi bi-laptop fs-1 mb-2"></i> {{-- Icon fix diya, agar chaho DB se bhi le sakte ho --}}
                                <h6 class="fw-bold">{{ $course->course_title }}</h6>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center px-3 py-2" style="background-color:rgb(111, 173, 125); height: 25%;">
                                <small class="fw-bold text-white">{{ $course->course_duration }}</small>
                                <i class="bi bi-play-circle-fill text-white fs-5"></i>
                            </div>
                        </div>
                    </div>
                </a>
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
<section class="pt-5  text-center">
    <div class="container">
        <h2 class="fw-bold mb-2 typewriter">Certified & Authenticated By</h2>

        <div class="row justify-content-center align-items-center g-3">
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
<section class="pb-5 bg-white ">
    <div class="container mt-3">
        <h2 class="text-left fw-bold mb-3 mx-3">Our Vision & Mission</h2>

        <div class="row g-4 align-items-stretch mx-3">

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