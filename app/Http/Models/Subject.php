<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $table = 'subjects';
    protected $fillable = [
        'title',
        'course_id',
    ];
}
