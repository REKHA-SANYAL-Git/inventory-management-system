<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AssignSuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::where(
            'role_code',
            'SUPER_ADMIN'
        )->first();

        User::query()
            ->first()
            ->update([
                'role_id' => $role->id
            ]);
    }
}
