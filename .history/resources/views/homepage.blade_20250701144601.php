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

<!-- About Us Carousel Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">About MS COMPUTER</h2>
    <div id="aboutCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <p class="text-center px-4">Running since 2018, we provide practical and easy-to-understand computer education to students, businessmen, housewives, and professionals.</p>
        </div>
        <div class="carousel-item">
          <p class="text-center px-4">Our goal is to train young minds to be leaders with strong values and dedication to excellence, truth, and justice.</p>
        </div>
        <div class="carousel-item">
          <p class="text-center px-4">We offer 100% practical training with a strong commitment to academic and professional success for all students.</p>
        </div>
        <div class="carousel-item">
          <p class="text-center px-4">Located in Bharuch, our ISO-certified institute is equipped to expose students to real-life corporate environments and tech skills.</p>
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

<!-- Director's Quotes Carousel Section -->
<section class="py-5 bg-white">
  <div class="container">
    <h2 class="text-center fw-bold mb-5">Director's Message</h2>
    <div id="quoteCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <blockquote class="blockquote text-center">
            <p class="mb-4">"Education shapes civilization and pushes humanity forward. We are here to help our youth experience the future."</p>
            <footer class="blockquote-footer">Mustaq Ahmed Shaikh, Director</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote text-center">
            <p class="mb-4">"Excellence and value are not just our principles, but our promise to every student that walks through our doors."</p>
            <footer class="blockquote-footer">Mustaq Ahmed Shaikh, Director</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote text-center">
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