<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = [
        'student_id', 'course_id', 'payment_amount_paid', 'payment_total_fee',
        'payment_remaining_balance', 'payment_mode', 'transaction_id',
        'installment_number', 'payment_date', 'note',
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
