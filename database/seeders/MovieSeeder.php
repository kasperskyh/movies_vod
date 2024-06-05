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
                    'title' => 'Nieogarniający Student', 'duration' => '70', 'rate' => '1', 'category_id' => '7', 'price' => '15', 'company' => 'Bobo', 'img' => 'movies/nstudent.jpg'
                ],
                [
                    'title' => 'Zakochani', 'duration' => '140', 'rate' => '7', 'category_id' => '1', 'price' => '30', 'company' => 'BestFilms','img' => 'movies/zakochani.jpg'
                ],
                [
                    'title' => 'Peksio i Recik', 'duration' => '90', 'rate' => '9', 'category_id' => '4', 'price' => '20', 'company' => 'ForKids', 'img' => 'movies/peksioirecik.jpg'
                ],
                [
                    'title' => 'Dziewczyna w okularach', 'duration' => '90', 'rate' => '7', 'category_id' => '1', 'price' => '25', 'company' => 'ForKids', 'img' => 'movies/dziewczynawok.jpg'
                ],
                [
                    'title' => 'W ogródku', 'duration' => '120', 'rate' => '4', 'category_id' => '1', 'price' => '30', 'company' => 'Bobo', 'img' => 'movies/wogrodku.jpg'
                ],
                [
                    'title' => 'Szklane okno', 'duration' => '135', 'rate' => '6', 'category_id' => '2', 'price' => '15', 'company' => 'BestFilms','img' => 'movies/okno.jpg'
                ],
                [
                    'title' => 'Szklane okno v2', 'duration' => '145', 'rate' => '7', 'category_id' => '2', 'price' => '15', 'company' => 'BestFilms','img' => 'movies/okno2.jpg'
                ],
                [
                    'title' => 'Szklane okno v3', 'duration' => '130', 'rate' => '3', 'category_id' => '2', 'price' => '15', 'company' => 'BestFilms','img' => 'movies/okno3.jpg'
                ],
                [
                    'title' => 'Deszcz', 'duration' => '76', 'rate' => '3', 'category_id' => '7', 'price' => '20', 'company' => 'Bobo', 'img' => 'movies/deszcz.jpg'
                ],
                [
                    'title' => 'Kosmita', 'duration' => '90', 'rate' => '3', 'category_id' => '5', 'price' => '20', 'company' => 'BestFilms', 'img' => 'movies/kosmita.jpg'
                ],
                [
                    'title' => 'Ogry atakuja', 'duration' => '120', 'rate' => '8', 'category_id' => '6', 'price' => '20', 'company' => 'BestFilms','img' => 'movies/ogry.jpg'
                ],
                [
                    'title' => 'Staś i Jaś', 'duration' => '60', 'rate' => '5', 'category_id' => '4', 'price' => '20', 'company' => 'ForKids', 'img' => 'movies/stasjas.jpg'
                ],
                [
                    'title' => 'Baba na rowerze', 'duration' => '70', 'rate' => '2', 'category_id' => '3', 'price' => '20', 'company' => 'ForKids', 'img' => 'movies/babanarowerze.jpg'
                ],
                [
                    'title' => 'Lisek', 'duration' => '70', 'rate' => '7', 'category_id' => '8', 'price' => '20', 'company' => 'ForKids', 'img' => 'movies/lisek.jpg'
                ],
                [
                    'title' => 'Pączek ludojad', 'duration' => '70', 'rate' => '6', 'category_id' => '8', 'price' => '25', 'company' => 'ForKids', 'img' => 'movies/paczek.jpg'
                ],
            ]);
    }
}
