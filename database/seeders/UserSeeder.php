<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superuser = User::create([
            'name' => 'Super User',
            'email' => 'superuser@mail.com',
            'password' => Hash::make('superuser123'),
        ]);

        $admin = User::create([
            'name' => 'Administrator',
            'email' => 'admin@mail.com',
            'password' => Hash::make('admin123'),
        ]);

        $auditor = User::create([
            'name' => 'Auditor',
            'email' => 'auditor@mail.com',
            'password' => Hash::make('auditor123'),
        ]);

        $merchant = User::create([
            'name' => 'Merchant',
            'email' => 'merchant@mail.com',
            'password' => Hash::make('merchant123'),
        ]);

        $superuser->assignRole('superuser');
        $admin->assignRole('admin');
        $auditor->assignRole('auditor');
        $merchant->assignRole('merchant');
    }
}
