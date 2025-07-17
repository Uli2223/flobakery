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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->string('id_pembayaran')->primary();
            $table->string('metode_pembayaran');
            $table->decimal('jumlah_pembayaran', 10, 2);
            $table->string('id_pelanggan');
            $table->string('id_karyawan');

            $table->foreign('id_pelanggan')->references('id_pelanggan')->on('pelanggans');
            $table->foreign('id_karyawan')->references('id_karyawan')->on('karyawans');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
