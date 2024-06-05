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
        User::truncate();
        User::insert(
            [
                [
                    'name' => 'Jan', 'email' => 'jan@email.com', 'password' => Hash::make('admin1234'),
                    'role' => 'admin',
                ],
                [
                    'name' => 'Kacper', 'email' => 'kacper@email.com', 'password' => Hash::make('user123'),
                    'role' => 'user',
                ],
                [
                    'name' => 'Ala', 'email' => 'ala@email.com', 'password' => Hash::make('user123'),
                    'role' => 'user',
                ],
                [
                    'name' => 'Julia', 'email' => 'julia@email.com', 'password' => Hash::make('user123'),
                    'role' => 'user',
                ],
                [
                    'name' => 'Marian', 'email' => 'watrobka@email.com', 'password' => Hash::make('user123'),
                    'role' => 'user',
                ],
            ]
        );
    }
}
