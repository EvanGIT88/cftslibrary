<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pinjaman_bukus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_siswas')->constrained('siswas')->onDelete('CASCADE');
            $table->foreignId('id_bukus')->constrained('bukus')->onDelete('CASCADE');
            $table->date("tanggal_pinjam");
            $table->date("tanggal_kembali");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pinjaman_bukus');
    }
};
