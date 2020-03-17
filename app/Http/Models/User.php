<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';
    protected $fillable = [
        'username',
        'full_name',
        'email',
        'phone',
        'avatar',
        'role_id',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
}
