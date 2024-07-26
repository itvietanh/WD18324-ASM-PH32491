<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\Film;
use App\Models\ShowTimeFrame;
use App\Models\Room;
use App\Models\Cinema;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ShowFilm>
 */
class ShowFilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'film_id' => Film::all()->random()->id,
            'show_time_frame_id' => ShowTimeFrame::all()->random()->id,
            'room_id' => Room::all()->random()->id,
            'cinema_id' => Cinema::all()->random()->id,
            'show_date' => $this->faker->date,
        ];
    }
}
