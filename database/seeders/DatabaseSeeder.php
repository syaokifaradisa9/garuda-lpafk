<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Archieve\Database\Seeders\ArchieveDatabaseSeeder;
use Modules\Inventory\Database\Seeders\InventoryDatabaseSeeder;
use Modules\Staffing\Database\Seeders\StaffingDatabaseSeeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $this->call([
            UnitSeeder::class,
            UserSeeder::class,

            ArchieveDatabaseSeeder::class,
            InventoryDatabaseSeeder::class,
            StaffingDatabaseSeeder::class,
        ]);
    }
}
