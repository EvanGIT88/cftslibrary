<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    /*
            $table->string("isbn")->unique();
            $table->string("judul");
            $table->string("pengarang");
               $table->string("penerbit");
                  $table->string("tahun");
                              'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
    */
    public function definition(): array
    {
        return [
            //
             'isbn' => rand(1111111111111, 9999999999999),
             'judul' => Str::random(),
             'pengarang' => fake()->name(),
             'penerbit' => fake()->name(),
             'tahun' => Carbon::now()->isoFormat('YYYY')
        ];
    }
}
