<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transaksi;   

class Transaksi extends Model
{
    use HasFactory;
    protected $table='transaksi';

    protected $fillable = [
        'pembeli_id',
        'barang_id',
        'jumlah',
        'total_harga',
    ];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function pembeli(){
        return $this->belongsTo(Pembeli::class);
    }

    public function detail_transaksi(){
        return $this->belongsToMany(Detail_Transaksi::class);
    }

    public function pembayaran(){
        return $this->belongsToMany(Pembayaran::class);
    }
}
