<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    protected $fillable = [
        'course_id', 'course_title', 'course_image', 'course_duration',
        'course_description', 'course_curriculum', 'course_rating', 'course_reviews'
    ];

    protected $casts = [
        'course_curriculum' => 'array',
    ];
}
