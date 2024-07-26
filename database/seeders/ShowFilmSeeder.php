<?php

namespace Database\Seeders;

use App\Models\ShowFilm;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowFilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShowFilm::factory(10)->create();

    }
}
