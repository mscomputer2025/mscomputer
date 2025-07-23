<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Admin extends Authenticatable
{
    use Notifiable;

    use HasFactory;
    protected $table = 'admin'; // your table name is singular

     protected $fillable = [
        'admin_name', 'admin_email', 'admin_password', 'admin_role',
    ];

    protected $hidden = [
        'admin_password',
    ];
      public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
