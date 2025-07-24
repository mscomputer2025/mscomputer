<?php

namespace App\Providers;
use Livewire\Livewire;
use App\Livewire\StudentDashboard;
use Illuminate\Support\ServiceProvider;
use App\Models\Courses;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
  
    public function register(): void
    {
        //
    }

    public function boot()
{
     Livewire::component('student-dashboard', StudentDashboard::class);
    View::composer('*', function ($view) {
        $view->with('allCourses', Courses::all());
    });
}
}
