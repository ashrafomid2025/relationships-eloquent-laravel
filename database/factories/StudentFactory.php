<?php

namespace Database\Factories;

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
            //
            "name"      => $this->faker->firstName(),
            "lastName" => $this->faker->lastName(),
            "email" => $this->faker->email(),
            "dob" => $this->faker->date(),
            "gender" => $this->faker->randomElement(['m','f']),
            "user_id" => $this->faker->numberBetween(1,100),
            "class_id" => $this->faker->numberBetween(1,5)
        ];
    }
}
