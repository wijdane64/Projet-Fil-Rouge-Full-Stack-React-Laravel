<?php

namespace Database\Factories;
use App\Models\Level;
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
        return [
            'firstname' => $this->faker->firstName(),
            'lastname'  => $this->faker->lastName(),
            'email'     => $this->faker->unique()->safeEmail(),
            'phone'     => $this->faker->unique()->phoneNumber(),
            'address'   => $this->faker->address(),
            'gender'    => $this->faker->randomElement(['male', 'female']),
            'date_of_birth' => $this->faker->date('Y-m-d', '-10 years'),
             'level_id' => $this->faker->numberBetween(1, 6),
            'parent_name'  => $this->faker->name(),
            'parent_phone' => $this->faker->phoneNumber(),
            'parent_email' => $this->faker->safeEmail(),
        ];
    }
}
