@extends('master.master')
@section('title', $course->course_title)

@section('content')


<div class="container">
    <div class="row align-items-center my-5">
        <div class="col-md-6">
            <img src="{{ asset('images/' . $course->course_image) }}" alt="{{ $course->course_title}}" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h2 class="fw-bold text-dark">{{ $course->course_title }}</h2>
            <p class="text-muted mb-3">{{ $course->course_description}}</p>
            <p class="text-muted">Duration: <strong>{{  $course->course_duration }}</strong></p>

            <!-- <div class="mt-3">
                <strong>Rating:</strong>
                <span class="text-warning">
                    @for ($i = 1; $i <= floor( $course->course_rating ); $i++)<i class="bi bi-star-fill"></i>@endfor
                        @if (fmod( $course->course_rating , 1) > 0)<i class="bi bi-star-half"></i>@endif
                </span>
                <small class="text-muted ms-2">{{  $course->course_rating  }}/5 based on {{  $course->course_reviews  }} reviews</small>
            </div> -->
        </div>
    </div>
    <div class="card  border-0 mb-5">
        <div class="card-body">
            <h4 class="mt-4">Curriculum</h4>
        <ul>
            @foreach ($course->course_curriculum as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
        </div>
    </div>

    @include('courses.partials.leave_reply')
</div>
@endsection
