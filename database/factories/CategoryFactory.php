<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
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
            'name'=> fake()->unique()->word(3, false),
            'description'=> fake()->text(),
        ];
    }
}
