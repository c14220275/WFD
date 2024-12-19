<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([



            [
                'car_model' => 'Chevrolet Malibu',
                'year' => 2022,
                'status' => 'available',
                'number_plate' => 'MN012OP',
                'no_rangka' => 'JKL1234567890',
                'price' => 550.00,
                'current_profile_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
