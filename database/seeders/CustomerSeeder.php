<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Customer::insert(
            [
                [
                    'first_name' => 'Krzysztow', 'last_name' => 'Bonczurek', 'date_of_birth' => '1999', 'email'=> 'krzysiu@onet.pl', 'phone_number'=> '123456789'
                ],
                [
                    'first_name' => 'Jan', 'last_name' => 'Wałek', 'date_of_birth' => '2001', 'email'=> 'Janek@onet.pl', 'phone_number'=> '123456785'
                ],
                [
                    'first_name' => 'Anna', 'last_name' => 'Przybylska', 'date_of_birth' => '2007', 'email'=> 'anuahehe@onet.pl', 'phone_number'=> '665367321'
                ],
            ]
        );
    }
}
