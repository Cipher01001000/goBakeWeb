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
        $categories = ["Cake", "Baking supplies", "Baking tools", "Baking equipments"];

        return [
            'user_id' => '1',
            'name' => $this->faker->word(),
            'product_image' => $this->faker->url(),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'stock' => '50',
            'description' => $this->faker->paragraph(5),
            'category' => $this->faker->randomElement($categories)
        ];
    }
}
