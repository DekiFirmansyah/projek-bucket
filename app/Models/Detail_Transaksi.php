<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Transaksi extends Model
{
    use HasFactory;
    protected $table='detail_transaksi';



    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

    public function toko(){
        return $this->belongsTo(Toko::class);
    }

    public function pembayaran(){
        return $this->belongsTo(Pembayaran::class);
    }
}
