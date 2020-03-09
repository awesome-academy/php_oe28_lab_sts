<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class UserTask extends Model
{
    protected $table = 'user_task';
    protected $fillable = [
        'user_id',
        'task_id',
        'report',
    ];
}
