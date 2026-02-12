<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Siswa;
use App\Models\Buku;

class PinjamanBuku extends Model
{
    use HasFactory;
    //
    /*
            $table->foreignId('id_siswas')->nullable()->constrained('siswas')->onDelete('CASCADE');
            $table->foreignId('id_bukus')->nullable()->constrained('bukus')->onDelete('CASCADE');
            $table->date("tanggal_pinjam");
            $table->date("tanggal_kembali");
    */
    protected $fillable = [
        'id_siswas',
        'id_bukus',
        'tanggal_pinjam',
        'tanggal_kembali'
    ];

    public function siswa() {
        return $this->hasMany(Siswa::class, "siswas");
    }

    public function buku() {
        return $this->hasMany(Buku::class, "bukus");
    }
}
