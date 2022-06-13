<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;
    protected $table='pembayaran';

    protected $fillable = [
        'transaksi_id',
        'metode_pembayarran',
        'status'
    ];

    public function transaksi(){
        return $this->belongsTo(Transaksi::class);
    }

    public function detail_transaksi(){
        return $this->belongsToMany(Detail_Transaksi::class);
    }
}
