<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }

    public function teacher(): HasOne
    {
        return $this->hasOne(Teacher::class);
    }

    public function classroom(): HasOne
    {
        return $this->hasOne(Classroom::class);
    }
}
