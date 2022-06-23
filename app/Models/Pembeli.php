<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembeli;

class Pembeli extends Model
{
    protected $table='pembeli';
    protected $primaryKey='id';

    protected $fillable = [
        'user_id',
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
