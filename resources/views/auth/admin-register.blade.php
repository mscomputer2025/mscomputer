@extends('master.master')
@section('title', 'Admin Register')

<div class="container py-5">
    <h2 class="mb-4 text-color">Admin Registration</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('admin.register') }}">
        @csrf

        <div class="mb-3">
            <label for="admin_name" class="form-label">Admin Name</label>
            <input type="text" class="form-control" id="admin_name" name="admin_name" required>
        </div>

        <div class="mb-3">
            <label for="admin_email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="admin_email" name="admin_email" required>
        </div>

        <div class="mb-3">
            <label for="admin_password" class="form-label">Password</label>
            <input type="password" class="form-control" id="admin_password" name="admin_password" required>
        </div>

        <div class="mb-3">
            <label for="admin_password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="admin_password_confirmation" name="admin_password_confirmation" required>
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div>
