<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::insert([
            [
                'role_name' => 'Super Admin',
                'role_code' => 'super_admin',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Inventory Manager',
                'role_code' => 'inventory_manager',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Warehouse Staff',
                'role_code' => 'warehouse_staff',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'role_name' => 'Sales Executive',
                'role_code' => 'sales_executive',
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
