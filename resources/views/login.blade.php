@extends('master.master')

@section('title', 'Login')

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

    .login-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(8px);
        -webkit-backdrop-filter: blur(8px);
        border-radius: 1.5rem;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.25);
        width: 100%;
        max-width: 420px;
        padding: 2rem;
        color: white;
    }

    .form-label,
    .text-color,
    .text-muted {
        color: white !important;
    }

    .form-control {
        background-color: transparent;
        border: 1px solid #ccc;
        color: white;
    }

    .form-control:focus {
        border-color: white;
        background-color: transparent;
        box-shadow: none;
        color: white;
    }

    .btn-primary {
        background-color: #ffffff33;
        border: none;
        color: white;
        transition: 0.3s;
    }

    .btn-primary:hover {
        background-color: #ffffff55;
    }
</style>

<div class="d-flex justify-content-center align-items-center" style="min-height: 100vh;">
    <div class="login-card">
        <h3 class="text-center mb-4">Login to Your Account</h3>

        @if (session('error'))
        <div class="alert alert-danger text-center py-2">
            {{ session('error') }}
        </div>
        @endif

        <form action="{{ route('login') }}" method="POST" class="needs-validation" novalidate>
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input id="email" name="email" type="email" class="form-control rounded-pill" required autofocus>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input id="password" name="password" type="password" class="form-control rounded-pill" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check text-start">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Remember me</label>
                </div>
                <a href="#" class="small text-decoration-none text-color">Forgot password?</a>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary rounded-pill">Sign in</button>
            </div>
        </form>

        <p class="text-center mt-4 mb-0 text-muted">
            Don’t have an account?
            <a href="{{ route('student.register') }}" class="text-decoration-none text-color fw-semibold">Register</a>
        </p>
    </div>
</div>
@endsection