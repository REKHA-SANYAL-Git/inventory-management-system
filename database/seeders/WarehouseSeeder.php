<?php

namespace Database\Seeders;

use App\Models\Warehouse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warehouse::insert([
            [
                'warehouse_name' => 'Main Warehouse',
                'warehouse_code' => 'WH001',
                'location' => 'Kolkata',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
