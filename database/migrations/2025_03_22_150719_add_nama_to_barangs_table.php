<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Jalankan migrasi.
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->string('nama')->unique(); // Kolom nama barang harus unik
            $table->integer('harga'); // Kolom harga
            $table->integer('stok'); // Kolom stok
            $table->timestamps(); // Kolom created_at & updated_at
        });
    }

    /**
     * Rollback migrasi.
     */
    public function down()
    {
        Schema::dropIfExists('barangs'); // Hapus tabel jika rollback
    }
};
