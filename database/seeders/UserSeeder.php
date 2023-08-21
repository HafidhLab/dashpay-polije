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

        $user = User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => Hash::make('userr123'),
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
        $user->assignRole('user');
        $auditor->assignRole('auditor');
        $merchant->assignRole('merchant');
    }
}
