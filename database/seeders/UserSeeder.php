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
        User::insert([
            [
                'name' => 'Root',
                'email' => 'root@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'root',
                User::CREATED_AT => now(),
                User::UPDATED_AT => now(),
            ],
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'admin',
                User::CREATED_AT => now(),
                User::UPDATED_AT => now(),
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'email_verified_at' => now(),
                'password' => Hash::make('password'),
                'role' => 'user',
                User::CREATED_AT => now(),
                User::UPDATED_AT => now(),
            ],
        ]);
    }
}
