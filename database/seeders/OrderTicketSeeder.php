<?php

namespace Database\Seeders;

use App\Models\OrderTicket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        OrderTicket::factory(10)->create();

    }
}
