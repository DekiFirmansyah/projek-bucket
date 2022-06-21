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
        'pembayaran',
        'status',
        'catatan'
    ];

    public function barang(){
        return $this->belongsTo(Barang::class);
    }

    public function pembeli(){
        return $this->belongsTo(Pembeli::class);
    }

    public function toko(){
        return $this->belongsTo(Toko::class);
    }    
}
