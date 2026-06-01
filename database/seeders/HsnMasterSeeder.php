<?php

namespace Database\Seeders;

use App\Models\Hsn;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HsnMasterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hsn::insert([
            [
                'hsn_code' => '84713010',
                'hsn_description' => 'Portable Automatic Data Processing Machines (Laptop)',
                'gst_rate' => 18,
                'effective_date' => now(),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hsn_code' => '84433100',
                'hsn_description' => 'Printers',
                'gst_rate' => 18,
                'effective_date' => now(),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hsn_code' => '84716040',
                'hsn_description' => 'Computer Keyboard',
                'gst_rate' => 18,
                'effective_date' => now(),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hsn_code' => '84716050',
                'hsn_description' => 'Computer Mouse',
                'gst_rate' => 18,
                'effective_date' => now(),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'hsn_code' => '19041090',
                'hsn_description' => 'Prepared Foods Obtained By Swelling Or Roasting Of Cereals',
                'gst_rate' => 18,
                'effective_date' => now(),
                'status' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
