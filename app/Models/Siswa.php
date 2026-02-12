<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Enums\Kelas;
use App\Enums\Jurusan;
use App\Models\User;
class Siswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    /*
            $table->integer("nis");
            $table->string("kelas");
            $table->string("jurusan");
            $table->string("nama_lengkap");
    */
    protected $fillable = [
        'user_id',
        'nis',
        'kelas',
        'jurusan',
        'nama_lengkap',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
        'kelas' => Kelas::class,
        'jurusan' => Jurusan::class
        ];
    }
}
