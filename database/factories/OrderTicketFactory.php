<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Account;
use App\Models\Film;
use App\Models\ShowTimeFrame;
use App\Models\Room;
use App\Models\Cinema;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderTicket>
 */
class OrderTicketFactory extends Factory
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
            'show_time_frame_id' => ShowTimeFrame::all()->random()->id,
            'film_id' => Film::all()->random()->id,
            'room_id' => Room::all()->random()->id,
            'cinema_id' => Cinema::all()->random()->id,
            'show_date' => $this->faker->date,
            'seat_order' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'order_date' => $this->faker->date,
            'quantity' => $this->faker->numberBetween(1, 10),
            'qr_code' => $this->faker->word,
            'order_id' => $this->faker->unique()->numberBetween(1000, 9999),
            'status' => $this->faker->word,
        ];
    }
}
