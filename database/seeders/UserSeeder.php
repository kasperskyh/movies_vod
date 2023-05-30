<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert(
            [
                [
                    'name' => 'Janek', 'email' => 'jan@email.com', 'password' => '1234',
                    'role' => 'admin'
                ],
                [
                    'name' => 'Adam', 'email' => 'adamek@email.com', 'password' => '123123',
                    'role' => 'user'
                ],
                [
                    'name' => 'Laura', 'email' => 'laurak@email.com', 'password' => '123123',
                    'role' => 'user'
                ],
            ]
        );
    }
}
