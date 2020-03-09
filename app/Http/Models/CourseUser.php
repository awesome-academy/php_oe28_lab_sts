<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class CourseUser extends Model
{
    protected $table = 'course_user';
    protected $fillable = [
        'user_id',
        'course_id',
        'start_time',
        'end_time',
        'status',
    ];
}
