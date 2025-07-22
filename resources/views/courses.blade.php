@extends('master.master')
@section('title', 'Course List')

@section('content')
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="fw-bold text-center mb-5">WELCOME TO MS COMPUTER INSTITUTE – LEADING COMPUTER TRAINING COURSES</h2>

        <div class="row justify-content-between mb-4">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search the Courses">
                        <button class="btn btn-warning text-white">Search</button>
                    </div>
                </form>
            </div>
            <div class="col-md-3">
                <select class="form-select">
                    <option>All courses</option>
                    <option>Short Term</option>
                    <option>Diplomas</option>
                </select>
            </div>
        </div>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 g-4">
    @foreach ($courses as $course)
    <div class="col">
        <a href="{{ route('courses.show', $course->course_id) }}" class="text-decoration-none">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('images/' . $course->course_image) }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                <div class="card-body">
                    <h4 class="card-title text-dark">{{ $course->course_title }}</h4>
                    <h5 class="text-secondary">{{ $course->course_duration }}</h5>
                </div>
            </div>
        </a>
    </div>
    @endforeach
</div>

</section>
@endsection