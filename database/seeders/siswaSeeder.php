<?php

namespace Database\Seeders;

use App\Models\siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class siswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = fake('ko_KR');

        for($i = 0; $i < 30; $i++){
            siswa::create([
                'NIM' => $faker->randomNumber(5, true),
                'name' => $faker->name(),
                'jenis_kelamin' => 'L',
                'alamat' => $faker->address(),
                'email' => $faker->email(),
                'password' => Hash::make(12345),
                'kelas_id' => $faker->numberBetween(1,3)
            ]);
        }
    }
}
