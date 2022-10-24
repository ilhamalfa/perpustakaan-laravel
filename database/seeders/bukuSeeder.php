<?php

namespace Database\Seeders;

use App\Models\buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class bukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake('ko_KR');

        for($i = 0; $i < 10; $i++){
            buku::create([
                'penulis' => $faker->name(),
                'tahun' => $faker->date('Y'),
                'judul' => $faker->word(),
                'kota' => $faker->city(),
                'penerbit' => $faker->word(),
                'sinopsis' => $faker->paragraph(),
                'stok' => $faker->randomNumber(2, true)
            ]);
        }
    }
}
