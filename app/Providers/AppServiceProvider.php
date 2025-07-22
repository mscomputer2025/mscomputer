<?php

namespace App\Providers;

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
    View::composer('*', function ($view) {
        $view->with('allCourses', Courses::all());
    });
}
}
