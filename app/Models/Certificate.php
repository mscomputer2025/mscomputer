<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'student_id', 'course_id', 'certificate_number',
        'certificate_issue_date', 'certificate_file',
    ];

    public function student()
    {
        return $this->belongsTo(Students::class);
    }

    public function course()
    {
        return $this->belongsTo(Courses::class);
    }
}
