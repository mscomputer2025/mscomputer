<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});
Route::get('/contactus', function () {
    return view('contactus');
});
Route::get('/courses', function () {
    return view('courses');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});