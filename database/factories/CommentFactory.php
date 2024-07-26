<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Account;
use App\Models\Film;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'account_id' => Account::all()->random()->id,
            'film_id' => Film::all()->random()->id,
            'content' => $this->faker->paragraph,
            'date_comment' => $this->faker->date,
        ];
    }
}
