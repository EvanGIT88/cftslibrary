<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Buku;
use App\Models\PinjamanBuku;
use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::factory(20)->has(Siswa::factory()->count(1))->create();
        Buku::factory(20)->create();
        PinjamanBuku::factory(20)
        ->has(Siswa::factory()->count(1))
        ->has(Buku::factory()->count(1))
        ->create();

    }
}
