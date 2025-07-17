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
        Schema::create('karyawans', function (Blueprint $table) {
            $table->string('id_karyawan')->primary();
            $table->string('nama_karyawan');
            $table->string('jabatan');
            $table->string('alamat');
            $table->string('nomor_telepon');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
