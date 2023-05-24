<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class join extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'gender',
        'email',
        'birthdate',
        'address',
        'course_id',
        'teacher_id'
      ];
}
