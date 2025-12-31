<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Level;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Level>
 */
class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Level::class;
    public function definition(): array
    {
       
      return [
            'name' => $this->faker->randomElement([
    '1ère année primaire',
    '2ème année primaire',
    '3ème année primaire',
    '4ème année primaire',
    '5ème année primaire',
    '6ème année primaire',
]),
            'description' => $this->faker->sentence(),
        ];
    }

}
