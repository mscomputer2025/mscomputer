@extends('layouts.dashboard-master')

@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto">
    @if(session('user_role') === 'admin')
        <div class="bg-white p-4 rounded shadow-sm text-center">
            <h2 class="text-2xl mb-2">Welcome Admin</h2>
            <p>Hello, {{ Auth::guard('admin')->user()->admin_name }}</p>
            <livewire:admin-dashboard />
        </div>
    @elseif(session('user_role') === 'student')
        <div class="bg-white p-4 rounded shadow-sm text-center">
            <h2 class="text-2xl mb-2">Welcome Student</h2>
            <p>Hello, {{ Auth::guard('student')->user()->student_name }}</p>
            <livewire:student-dashboard />
        </div>
    @endif
</div>
@endsection
