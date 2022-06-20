<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD
use App\Models\Pembeli;
=======
use Illuminate\Foundation\Auth\Mahasiswa as Authenticatable; 
use Illuminate\Notifications\Notifiable; 

>>>>>>> 0148ec447655715e8f351d47fa21e97c2a674543

class Pembeli extends Model
{
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
