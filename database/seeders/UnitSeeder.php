<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run(): void
    {
        foreach([
            "Manajemen",
            "PK",
            "SARPRAS",
            "UKPR",
            "PDP",
        ] as $unit){
            Unit::create([
                'name' => $unit,
            ]);
        }
    }
}
