<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;
    protected $table = 'barang';

    protected $fillable = [
        'nama',
        'harga',
        'kategori',
        'tambahan',
        'estimasi_pembuatan',
        'foto'
    ];

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class);
    }
}
