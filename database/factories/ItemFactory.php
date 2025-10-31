<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'category_id' => fake()->numberBetween(1, 5),
            'name' => fake()->unique()->word(),
            'price'=> fake()->randomFloat(1000,10000000),
            'stock'=> fake()->numberBetween(1, 100),
        ];
    
    }
}
