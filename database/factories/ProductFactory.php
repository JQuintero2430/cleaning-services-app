<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'category_id' => fake()->numberBetween(1, 1),
            'unit_of_measurement' => fake()->numberBetween(1, 1),
            'price' => fake()->numberBetween(5000, 60000),
            'stock' => fake()->numberBetween(1, 50),
        ];
    }
}
