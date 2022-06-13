<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('toko_id')->nullable();
            $table->unsignedBigInteger('transaksi_id')->nullable();
            $table->unsignedBigInteger('pembayaran_id')->nullable(); 
            $table->string('deskripsi');
            $table->timestamps();
            $table->foreign('transaksi_id')->references('id')->on('transaksi');
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran');
            $table->foreign('toko_id')->references('id')->on('toko');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detail_transaksi');
    }
}
