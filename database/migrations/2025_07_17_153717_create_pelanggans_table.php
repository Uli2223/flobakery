<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->string('id_pelanggan')->primary();
            $table->string('nama_pelanggan');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->string('membership');
            $table->string('id_karyawan');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggans');
    }
};
