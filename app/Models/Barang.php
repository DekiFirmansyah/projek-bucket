<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use App\Models\Barang;

class Barang extends Model
{
    protected $table = 'barang';

    protected $fillable = [
        'nama',
        'harga',
        'kategori',
        'estimasi_pembuatan',
        'foto',
        'catatan'
    ];

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class);
    }
}
