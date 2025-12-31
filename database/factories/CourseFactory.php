<?php

namespace Database\Factories;
use App\Models\Course;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Teacher;
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
     protected $model = Course::class;
    public function definition(): array
    {
    return [
           'level_id' => $this->faker->numberBetween(1, 6), 
           'subject_id' => $this->faker->numberBetween(1, 10),     
            'teacher_id' =>  $this->faker->numberBetween(1, 5), 
            'day'        => $this->faker->randomElement([
                'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'
            ]),
            'start_time' => $this->faker->time('H:i'),
            'end_time'   => $this->faker->time('H:i'),
        ];
    }
}
