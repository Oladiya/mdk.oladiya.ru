<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PizzeriaUser>
 */
class PizzeriaUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'tel' => fake()->phoneNumber(),
            'password' => fake()->word() . fake()->word(),
            'birth' => fake()->dateTime(),
        ];
    }
}
