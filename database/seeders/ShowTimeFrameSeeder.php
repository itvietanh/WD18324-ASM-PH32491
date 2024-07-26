<?php

namespace Database\Seeders;

use App\Models\ShowTimeFrame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShowTimeFrameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ShowTimeFrame::factory(10)->create();

    }
}
