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
            $table->integer('jumlah');
            $table->integer('total_harga');
            $table->text('catatan');
            $table->timestamps();
            $table->foreign('pembeli_id')->references('id')->on('pembeli');
            $table->foreign('barang_id')->references('id')->on('barang');
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
