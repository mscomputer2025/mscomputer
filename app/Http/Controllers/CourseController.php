<?php

namespace App\Http\Controllers;

use App\Models\CourseS;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Courses::all();
        return view('courses', compact('courses'));
    }

    public function show($course_id)
    {
        $course = Courses::where('course_id', $course_id)->firstOrFail();
        return view('courses.show', compact('course'));
    }
    public function home()
{
    $courses = Courses::all(); 

    return view('homepage', compact('courses'));
}
}
