<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
      'name',
      'gender',
      'birthdate',
      'address',
      'status',
      'case',
	  'classroom_id',
	  'course_id'
    ];

    public function getAgeAttribute(): int
    {
        return date_diff(date_create($this->birthdate), date_create())->y;
    }

    public function getGenderNameAttribute(): string
    {
        return ($this->gender === 0) ? 'Male' : 'Female';
    }

    public function classroom(): BelongsTo
    {
        return $this->belongsTo(Classroom::class);
    }

		public function courser(): BelongsTo
		{
			return $this->belongsTo(Course::class);
		}
}
