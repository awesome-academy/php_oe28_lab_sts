<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable = [
        'name',
        'description',
        'image',
        'creator_id',
        'time',
    ];
}
