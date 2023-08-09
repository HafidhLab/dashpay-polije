<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suRole = Role::create(['name' => 'superuser']);
        $amRole = Role::create(['name' => 'admin']);
        $auRole = Role::create(['name' => 'auditor']);
        $meRole = Role::create(['name' => 'merchant']);
    }
}
