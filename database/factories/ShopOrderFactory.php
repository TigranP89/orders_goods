<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShopOrder>
 */
class ShopOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $order_date = $this->faker->dateTimeBetween('-1 week', '+1 week');
        $email = $this->faker->unique()->safeEmail();
        $order_list = "order_list";
        $order_price = $this->faker->randomFloat(1, 1, 999);
        return [
            'order_date' =>$order_date,
            'email' => $email,
            'order_list' => $order_list,
            'order_price' => $order_price,
        ];
    }
}
