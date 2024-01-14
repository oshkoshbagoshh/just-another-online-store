<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use Illuminate\Support\Str;

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
            // fake products go here:
            'name' => $this->faker->word(), // $this->faker->word() is a random word
            'description' => $this->faker->sentence(),
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // 'products' is the folder name in public/storage
            'price' => $this->faker->numberBetween(100, 10000),
        ];
    }
}
