<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Grade>
 */
class GradeFactory extends Factory
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
            "score"=> $this->faker->numberBetween(5,100),
            "student_id"=> $this->faker->numberBetween(1,90),
            "subject_id"=> $this->faker->numberBetween(1,5)
        ];
    }
}
