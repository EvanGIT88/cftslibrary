<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Siswa;
use App\Models\Buku;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PinjamanBuku>
 */
class PinjamanBukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    /*
             $table->foreignId('id_siswas')->constrained('siswas')->onDelete('CASCADE');
            $table->foreignId('id_bukus')->constrained('bukus')->onDelete('CASCADE');
            $table->date("tanggal_pinjam");
            $table->date("tanggal_kembali");
    */
    public function definition(): array
    {
        $tanggalPinjam = Carbon::yesterday();
        return [
            //
            "siswa_id" => Siswa::factory(),
            "buku_id" => Buku::factory(),
            "tanggal_pinjam"=> $tanggalPinjam,
            "tanggal_kembali" => $tanggalPinjam->subHours(3)
        ];
    }
}
