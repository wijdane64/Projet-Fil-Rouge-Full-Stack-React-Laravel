<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Course;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
     protected $model = Registration::class;
    public function definition(): array
    {
         return [
            'student_id' => $this->faker->numberBetween(1, 20),
            'course_id' => $this->faker->numberBetween(1, 10), 
            'registration_date' => $this->faker->date(),
            'status'            => $this->faker->randomElement([
                'pending', 'confirmed', 'cancelled'
            ]),
        ];
    }
}
