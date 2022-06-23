<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trs = [
            [
                'pembeli_id' => 1,
                'barang_id' => 1,
                'toko_id' => 1,
                'Catatan' => 'Untuk warna bunga merah. Dan untuk kalimat kartu ucapan "Happy Graduation My Girl".'
            ],
            [
                'pembeli_id' => 2,
                'barang_id' => 3,
                'toko_id' => 1,
                'Catatan' => 'Untuk boneka warna putih. Dan untuk kalimat kartu ucapan "Selalmat Lulus Sepupu".'
            ]
        ];

        DB::table('transaksi')->insert($trs);
    }
}