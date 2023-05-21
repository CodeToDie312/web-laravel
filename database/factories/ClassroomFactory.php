<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Classroom>
 */
class ClassroomFactory extends Factory
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
            'status' => '1',
            'address' => $this->faker->address(),
            'course_id' => $this->faker->randomElement($course_id)
        ];
    }
}
