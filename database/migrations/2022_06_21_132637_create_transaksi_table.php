<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pembeli_id')->nullable();
            $table->unsignedBigInteger('barang_id')->nullable();
            $table->unsignedBigInteger('toko_id')->nullable(); 
            $table->integer('jumlah')->default('1');
            $table->enum('pembayaran', ['pending', 'sukses'])->default('pending');
            $table->enum('status', ['diproses', 'sukses'])->default('diproses');
            $table->text('catatan');
            $table->timestamp('waktu')->nullable();
            $table->foreign('pembeli_id')->references('id')->on('pembeli');
            $table->foreign('barang_id')->references('id')->on('barang');
            $table->foreign('toko_id')->references('id')->on('toko');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}