<?php

namespace Database\Factories;

use App\Models\Classroom;
use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $classroom_id = Classroom::all()->pluck('id');
        $course_id = Course::all()->pluck('id');
        return [
            'name' => $this->faker->name(),
            'gender' => 'male',
            'email' => $this->faker->email(),
            'birthdate' => now(),
            'address' => $this->faker->address(),
            'status' => '1',
            'case' => $this->faker->numberBetween(0, 10),
            'classroom_id' => $this->faker->randomElement($classroom_id),
            'course_id'=> $this->faker->randomElement($course_id)
        ];
    }
}
