<?php

namespace Database\Factories;

use App\Models\Cart;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status'=>$this->faker->randomElement(['processing', 'done', 'cancelled']),
            'name'=>$this->faker->name(),
            'message'=>$this->faker->paragraph(),
            'address'=>$this->faker->address(),
            'city'=>$this->faker->city(),
            'zip'=>$this->faker->postcode(),
            'province'=>$this->faker->state(),
            'phoneNumber'=>$this->faker->phoneNumber(),
            'cart_id'=>Cart::all()->random()->id,
            'user_id'=>User::all()->where('role', 'member')->random()->id
        ];
    }
}
