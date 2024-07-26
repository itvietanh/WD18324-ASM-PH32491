<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PaymentMomo>
 */
class PaymentMomoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'partner_code' => $this->faker->word,
            'order_id' => $this->faker->unique()->numberBetween(1000, 9999),
            'amount' => $this->faker->randomFloat(2, 1, 1000),
            'order_info' => $this->faker->sentence,
            'order_type' => $this->faker->word,
            'trans_id' => $this->faker->unique()->numberBetween(100000, 999999),
            'pay_type' => $this->faker->word,
        ];
    }
}
