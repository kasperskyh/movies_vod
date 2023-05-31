<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Movie::insert(
            [
                [
                    'title' => 'c1', 'duration' => '140', 'rate' => '1', 'category_id' => '1', 'price' => '70', 'company' => 'xxx'
                ],
                [
                    'title' => 'v2', 'duration' => '120', 'rate' => '8', 'category_id' => '3', 'price' => '40', 'company' => 'xxx'
                ],
            ]);
    }
}
