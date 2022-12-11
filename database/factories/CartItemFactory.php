<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CartItem>
 */
class CartItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantity'=>$this->faker->randomDigit(),
            'price'=>$this->faker->randomNumber(),
            'cart_id'=>Cart::all()->random()->id,
            'product_id'=>Product::all()->random()->id
        ];
    }
}
