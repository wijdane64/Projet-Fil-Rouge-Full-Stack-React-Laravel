<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'level_id'=> fake()->numberBetween(1,5), 
            'subject_id'=>fake()->numberBetween(1,10), 
            'teacher_id' =>fake()->numberBetween(1,10), 
            'day' =>fake()->dayOfWeek(),
            'start_time' =>fake()->time(), 
            'end_time' => fake()->time(),
        ];
    }
}
