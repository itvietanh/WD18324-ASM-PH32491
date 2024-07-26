<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Account;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AccountSeeder::class,
            GenreSeeder::class,
            FilmSeeder::class,
            CommentSeeder::class,
            CinemaSeeder::class,
            RoomSeeder::class,
            ShowTimeFrameSeeder::class,
            ShowFilmSeeder::class,
            OrderTicketSeeder::class,
            TicketSeeder::class,
            PaymentMomoSeeder::class
        ]);
    }
}
