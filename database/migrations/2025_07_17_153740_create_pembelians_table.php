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
        Schema::create('pembelians', function (Blueprint $table) {
            $table->string('id_pembelian')->primary();
            $table->string('id_produk');
            $table->decimal('harga_produk', 10, 2);
            $table->integer('jumlah_pembayaran');
            $table->decimal('harga_total', 10, 2);

            $table->foreign('id_produk')->references('id_produk')->on('produks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembelians');
    }
};
