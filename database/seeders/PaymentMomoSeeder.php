<?php

namespace Database\Seeders;

use App\Models\PaymentMomo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaymentMomoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaymentMomo::factory(10)->create();

    }
}
