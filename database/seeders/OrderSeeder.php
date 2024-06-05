<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
    /**
     * Run the database seeds.
     */

    Order::insert(
        [
            [
                'movie_id' => '1', 'customer_id' => '2', 'price' => '15', 'date' => '2021-05-21'
            ],
            [
                'movie_id' => '3', 'customer_id' => '1', 'price' => '20', 'date' => '2022-05-21'
            ],
            [
                'movie_id' => '7', 'customer_id' => '3', 'price' => '30', 'date' => '2023-04-21'
            ],
        ]
    );
    }
}
