<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use App\Enums\Kelas;
use App\Enums\Jurusan;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Siswa>
 */
class SiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /*
           $table->foreignId('id_user')->constrained('users')->onDelete('CASCADE');
            $table->integer("nis")->unique();
            $table->string("kelas");
            $table->string("jurusan");
            $table->string("nama_lengkap");\
               protected $fillable = [
        'nis',
        'kelas',
        'jurusan',
        'nama_lengkap',
           'kelas' => Kelas::class,
        'jurusan' => Jurusan::class
    ];
    */
    public function definition(): array
    {
        return [
            //
            "id_user" => User::factory(),
            "nis" => rand(1,13),
            "kelas" => Kelas::DUABELAS,
            "jurusan" => Jurusan::PPLG,
            "nama_lengkap" => fake()->name(),
        ];
    }
}
