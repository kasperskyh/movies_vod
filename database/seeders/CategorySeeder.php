<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Movie;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Category::truncate();
            Movie::truncate();
        });

        Category::insert(
            [
                [
                    'name' => 'Romantyczny', 'description' => 'Romantyczne filmy: pełne emocji, opowieści o miłości i relacjach. Poczucie bliskości, marzenia o idealnej miłości, burzliwe romanse.', 'age' => '18'
                ],
                [
                    'name' => 'Akcja', 'description' => 'Filmy akcji: dynamiczne, pełne walki i pościgów. Odważni bohaterowie, niebezpieczeństwo i napięcie. Strzelaniny, pojedynki, ekscytujące sceny.', 'age' => '18'
                ],
                [
                    'name' => 'Komedia', 'description' => 'Kategoria filmu Komedia: pełna śmiechu, humoru i zabawy. Żartobliwe sytuacje, błazeństwa i dialogi, które rozbawiają. Idealne rozrywka dla wszystkich, którzy lubią się uśmiechać i odprężyć.', 'age' => '12'
                ],
                [
                    'name' => 'Dla Dzieci', 'description' => 'Kategoria filmu dla dzieci: pełna przygód, edukacyjna, pełna humoru, dostosowana do wieku, inspirująca wyobraźnię i wartościowa.', 'age' => '7'
                ],
                [
                    'name' => 'Sci-Fi', 'description' => 'Sci-Fi: podróże w przyszłość, niesamowite technologie, obce istoty. Historie o ludzkiej naturze i naszej roli we wszechświecie. Efekty specjalne i przygody w kosmosie.', 'age' => '12'
                ],
                [
                    'name' => 'Fantasy', 'description' => 'magiczne światy, legendarne stworzenia, epickie bitwy. Przenosi nas w świadomość pełną czarów i niezwykłych przygód.', 'age' => '7'
                ],
                [
                    'name' => 'Dramat', 'description' => 'Kategoria filmu Dramat: emocjonalna podróż, silne aktorstwo, poruszające historie. Zmagania bohaterów, siła i słabości. Dotyka trudnych tematów, angażuje i wzrusza. Silne emocje i niezapomniane chwile.', 'age' => '12'
                ],
                [
                    'name' => 'Animowane', 'description' => 'Kategoria filmu animowanego: magiczne animacje, przygody, emocje dla wszystkich wieków. Ożywiona wyobraźnia i mądre przesłanie. Dla dzieci i dorosłych, pełne kolorów i niezwykłych postaci.', 'age' => '3'
                ],
            ]
        );
    }
}
