<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Students extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guard = 'student'; // custom auth guard

    protected $fillable = [
        'student_name',
        'student_email',
        'student_mobile',
        'student_gender',
        'student_dob',
        'student_address',
        'student_city',
        'student_pincode',
        'student_photo',
        'student_aadhaar_no',
        'student_guardian_name',
        'student_guardian_contact',
        'student_qualification',
        'student_password',
        'student_user_role',
    ];

    protected $hidden = [
        'student_password',
        'remember_token',
    ];

    protected $casts = [
        'student_dob' => 'date',
    ];
    public function courses()
    {
        return $this->belongsToMany(Courses::class, 'enrollments')
            ->withPivot('total_fee', 'amount_paid', 'amount_due', 'enrollment_date', 'status')
            ->withTimestamps();
    }


    public function getAuthPassword()
    {
        return $this->student_password; // needed for custom password field
    }
}
