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
    public function definition()
    {
        return [
            'code'=> fake()->unique()->regexify('[A-Z0-9]{8}'),
            'name'=> fake()->unique()->words(3, true),
            'description'=> fake()->boolean()
                        ? fake()->text() 
                        : NULL,
            'price'=> fake()->randomFloat(2, 1, 9999.99),
            'weight'=> fake()->boolean()
                        ? fake()->numberBetween(2, 1000) 
                        : NULL,
        ];
    }
}
