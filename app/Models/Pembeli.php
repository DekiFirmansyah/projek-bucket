<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable; 
use Illuminate\Notifications\Notifiable; 


class Pembeli extends Model
{
    use HasFactory;
    protected $table='pembeli';

    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'email',
        'alamat',
        'no_telp',
        'foto'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function transaksi(){
        return $this->belongsToMany(Transaksi::class);
    }
}
