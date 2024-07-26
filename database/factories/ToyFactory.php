<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Toy>
 */
class ToyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'category_id' => Category::inRandomOrder()->first()->id,
            'image' => $this->faker->imageUrl(),
            'name' => $this->faker->word(), // Generate a random name
            'description' => $this->faker->paragraph(), // Generate a random description
            'stock' => $this->faker->numberBetween(1, 100), // Generate a random stock number
            'price' => $this->faker->numberBetween(100, 10000), // Generate a random price
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
