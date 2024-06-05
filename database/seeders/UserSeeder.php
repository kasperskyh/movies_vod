<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
>>>>>>> origin/master

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
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
=======
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
>>>>>>> origin/master
                ],
            ]
        );
    }
}
