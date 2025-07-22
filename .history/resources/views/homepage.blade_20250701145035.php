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
                    ];
                  @endphp

                @foreach ($courses as $course)
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="course-box p-4 shadow rounded-4 h-100 transition-hover">
                            <div class="mb-3">
                                <i class="bi bi-{{ $course['icon'] }} fs-1 text-primary"></i>
                            </div>
                            <h6 class="fw-semibold text-dark">{{ $course['title'] }}</h6>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

<!-- About Us Carousel Section with Paragraphs and Icons -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">About MS COMPUTER</h2>
    <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="text-center px-4">
            <i class="bi bi-laptop fs-2 text-primary mb-3"></i>
            <p>Running since 2018, MS COMPUTER provides practical and easy-to-understand computer education to students, businessmen, housewives, and working professionals. Our aim is to make learning technology simple and accessible for everyone regardless of their background.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center px-4">
            <i class="bi bi-award fs-2 text-success mb-3"></i>
            <p>MS Computer Institute is ISO-9001-2015 certified and accredited by the Government of India. Located near Muhammadpura Circle, Bharuch, the institute is rooted in an industrial region, offering students immense exposure to a real-world tech environment.</p>
          </div>
        </div>
        <div class="carousel-item">
          <div class="text-center px-4">
            <i class="bi bi-bullseye fs-2 text-danger mb-3"></i>
            <p>Our goal is to empower youth to become responsible and skilled professionals by promoting values like discipline, self-reliance, and technical competence through hands-on training and structured methodology.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#aboutCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#aboutCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

<!-- Director's Quotes Carousel Section with Icons and Auto Slide -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Director's Message</h2>
    <div id="quoteCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000" data-bs-pause="hover">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote text-center">
            <i class="bi bi-lightbulb fs-1 text-warning mb-3"></i>
            <p class="mb-4">"Education shapes civilization and pushes humanity forward. We are here to help our youth experience the future."</p>
            <footer class="blockquote-footer">Mustaq Ahmed Shaikh, Director</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote text-center">
            <i class="bi bi-star-fill fs-1 text-primary mb-3"></i>
            <p class="mb-4">"Excellence and value are not just our principles, but our promise to every student that walks through our doors."</p>
            <footer class="blockquote-footer">Mustaq Ahmed Shaikh, Director</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote text-center">
            <i class="bi bi-rocket fs-1 text-danger mb-3"></i>
            <p class="mb-4">"We nurture dreams, develop skills, and help youth become self-reliant and ethically strong professionals."</p>
            <footer class="blockquote-footer">Mustaq Ahmed Shaikh, Director</footer>
          </blockquote>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#quoteCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#quoteCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
</section>

@endsection