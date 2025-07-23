<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'review_name', 'review_comment', 'review_rating', 'review_course_id',
    ];

    public function course()
    {
        return $this->belongsTo(Courses::class, 'review_course_id');
    }
}
