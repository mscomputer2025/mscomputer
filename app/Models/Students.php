<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Students extends Authenticatable
{
    use HasFactory;

    protected $table = 'students'; 

    protected $fillable = [
        'student_name',
        'student_email',
        'student_phone',
        'student_course',
        'student_address',
        'student_photo',
        'student_password',
        'user_type',
    ];
    
    public function getAuthPassword()
    {
        return $this->student_password; 
    }
}
