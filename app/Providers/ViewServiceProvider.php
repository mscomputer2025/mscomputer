<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\Support\Facades\Validator;
use App\Models\Courses;

class ViewServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        //
    }


    public function boot()
    {
        View::composer('*', function ($view) {
            $courses = Courses::all();
            $view->with('courses', $courses);
        });
    }
}
