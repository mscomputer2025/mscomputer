<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'eneuiry_name', 'eneuiry_email', 'eneuiry_phone',
        'eneuiry_message', 'eneuiry_is_followed',
    ];
}
