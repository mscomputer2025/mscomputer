@extends('master.master')

@section('title', 'Home')

@section('content')
    <div class="hero">
        <div>
            <h1 class="display-3 fw-bold">Empowering Futures Through Technology</h1>
            <p class="lead">Simple. Practical. Professional Computer Education.</p>
        </div>
    </div>
    <section class="py-5 bg-light text-center">
        <div class="container">
            <h2 class="fw-bold mb-5">Choose the Right Course for Your Future</h2>
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
                        <div class="course-box p-4 bg-white shadow-sm rounded-4 h-100 transition-hover">
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


@endsection