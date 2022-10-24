<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = fake('id_ID');

        User::create([
            'NIP' => $faker->randomNumber(5, true),
            'name' => 'admin',
            'jenis_kelamin' => 'L',
            'alamat' => $faker->address(),
            'email' => 'adm@c.m',
            'password' => Hash::make(12345)
        ]);

        $this->call(bukuSeeder::class);
        $this->call(kelasSeeder::class);
        $this->call(siswaSeeder::class);
    }
}
