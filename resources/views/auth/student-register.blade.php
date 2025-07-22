@extends('master.master')
@section('title', 'Student Register')

@section('content')
<style>
    body {
        min-height: 100vh;
        background-image: url('../images/wallpaper.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        background-attachment: fixed;

        display: flex;
        align-items: center;
        justify-content: center;
    }

    .register-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
        border-radius: 1.5rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
        color: white;
        width: 100%;
        max-width: 600px;
        padding: 2.5rem;
    }

    .form-label,
    .form-text,
    .form-select,
    .form-control,
    .text-primary,
    .text-muted {
        color: white !important;
    }

    .form-control,
    .form-select {
        background-color: transparent;
        border: 1px solid #ccc;
        border-radius: 1rem;
        color: white;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: white;
        background-color: transparent;
        box-shadow: none;
    }

    .btn-primary {
        background-color: rgba(255, 255, 255, 0.2);
        border: none;
        color: white;
        border-radius: 50px;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: rgba(255, 255, 255, 0.4);
        color: #000;
    }

    .alert-danger {
        background-color: rgba(255, 0, 0, 0.1);
        border: none;
        color: white;
    }
</style>

<div class="register-card">
    <h3 class="mb-4 text-center text-primary fw-bold">Student Registration</h3>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('student.register') }}">
        @csrf

        <div class="mb-3">
            <label for="student_name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="student_name" name="student_name" required>
        </div>

        <div class="mb-3">
            <label for="student_email" class="form-label">Email Address</label>
            <input type="email" class="form-control" id="student_email" name="student_email" required>
        </div>

        <div class="mb-3">
            <label for="student_phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="student_phone" name="student_phone" required>
        </div>

        <div class="mb-3">
            <label for="student_course" class="form-label">Course</label>
            <select class="form-select " id="student_course" name="student_course" required>
                <option selected disabled value="">Select a Course</option>
                <option value="Tally with GST">Tally with GST</option>
                <option value="MS-office">MS-office</option>
                <option value="DCA(Diploma in Computer Application)">DCA</option>
                <option value="Basic Computer">Basic Computer</option>
                <option value="PGDCA(Post Graduate Diploma in Computer Application)">PGDCA</option>
                <option value="DTP(Desktop Publishing)">DTP</option>
                <option value="Spoken English">Spoken English</option>
                <option value="Web Development & Designing">Web Development & Designing</option>
                <option value="ADIT(Advanced Diploma Information Technology)">ADIT</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="student_address" class="form-label">Address</label>
            <input type="text" class="form-control" id="student_address" name="student_address">
        </div>

        <div class="mb-3">
            <label for="student_password" class="form-label">Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="student_password" name="student_password" minlength="6" required>
                <button class="btn btn-outline-light" type="button" onclick="togglePassword('student_password')">
                    <i class="bi bi-eye" id="eye_student_password"></i>
                </button>
            </div>
            <div class="form-text">Minimum 6 characters.</div>
        </div>

        <div class="mb-4">
            <label for="student_password_confirmation" class="form-label">Confirm Password</label>
            <div class="input-group">
                <input type="password" class="form-control" id="student_password_confirmation" name="student_password_confirmation" required>
                <button class="btn btn-outline-light" type="button" onclick="togglePassword('student_password_confirmation')">
                    <i class="bi bi-eye" id="eye_student_password_confirmation"></i>
                </button>
            </div>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>


@endsection
