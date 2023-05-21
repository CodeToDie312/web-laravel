<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $course_id = Course::all()->pluck('id');
        return [
            'name' => $this->faker->name(),
            'gender' => '0',
            'birthdate' => now(),
            'address' => $this->faker->address(),
            'status' => 1,
            'course_id' => $this->faker->randomElement($course_id)
        ];
    }
}
