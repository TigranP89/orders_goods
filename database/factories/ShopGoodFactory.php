<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopGood>
 */
class ShopGoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $product_name = $this->faker->sentence(rand(1, 3), true);
        $product_price = $this->faker->randomFloat(1, 1, 999);

        return [
            'product_name' => $product_name,
            'product_price' => $product_price,
        ];
    }
}
