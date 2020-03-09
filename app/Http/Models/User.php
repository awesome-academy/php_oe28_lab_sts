<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'username',
        'password',
        'full_name',
        'email',
        'phone',
        'avatar',
        'role_id',
    ];
}
