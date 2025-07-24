<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Livewire\AdminDashboard;
use App\Livewire\StudentDashboard;


use Illuminate\Support\Facades\Auth;
Route::get('/', [CourseController::class, 'home'])->name('home');
Route::get('/courses', [CourseController::class, 'index'])->name('courses');
Route::get('/courses/{course_id}', [CourseController::class, 'show'])->name('courses.show');
Route::get('/gallery', function () {
    $imagePaths = File::files(public_path('images/gallery'));
    $images = collect($imagePaths)->map(fn($file) => 'images/gallery/' . $file->getFilename());
    return view('gallery', compact('images'));
})->name('gallery');
Route::view('/contactus', 'contactus')->name('contactus');
Route::view('/aboutus', 'aboutus')->name('aboutus');
// Admin
Route::get('/admin/register', [RegisterController::class, 'showAdminForm'])->name('admin.register');
Route::post('/admin/register', [RegisterController::class, 'registerAdmin']);

// Student
Route::get('/student/register', [RegisterController::class, 'showStudentForm'])->name('student.register');
Route::post('/student/register', [RegisterController::class, 'registerStudent']);
;
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', function () {
    if (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
    } elseif (Auth::guard('student')->check()) {
        Auth::guard('student')->logout();
    }
    session()->flush();
    return redirect('/login');
})->name('logout');
Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', AdminDashboard::class)->name('admin.dashboard');
});

// Student Dashboard
Route::middleware(['auth:student'])->group(function () {
    Route::get('/student/dashboard', StudentDashboard::class)->name('student.dashboard');
});
