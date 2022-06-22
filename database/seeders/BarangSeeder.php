<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brg = [
            [
                'nama' => 'Bucket Bunga Asli',
                'foto' => '',
                'harga'=> 80000,
                'kategori' => 'bunga mawar',
                'estimasi_pembuatan' => '4 jam',
                'catatan' => 'Gratis kartu ucapan dan bunga bisa memilih untuk warnanya. Untuk kalimat ucapan dan pilihan bunga bisa ditambahkan di catatan. '
            ],
            [
                'nama' => 'Bucket Bunga Buatan',
                'foto' => '',
                'harga'=> 55000,
                'kategori' => 'bunga buatan',
                'estimasi_pembuatan' => '3 jam',
                'catatan' => 'Gratis kartu ucapan dan bunga bisa memilih untuk warnanya. Untuk kalimat ucapan dan pilihan bunga bisa ditambahkan di catatan. '
            ],
            [
                'nama' => 'Bucket Boneka kecil',
                'foto' => '',
                'harga'=> 110000,
                'kategori' => 'boneka beruang',
                'estimasi_pembuatan' => '3 jam',
                'catatan' => 'Gratis kartu ucapan, untuk kalimat ucapan dan tambahan lainnya bisa ditambahkan di catatan. '
            ],
            [
                'nama' => 'Bucket Uang',
                'foto' => '',
                'harga'=> 35000,
                'kategori' => 'Uang kertas',
                'estimasi_pembuatan' => '5 jam',
                'catatan' => 'Harga hanya untuk proses pembuatan, serta gratis kartu ucapan. Untuk jumlah uang yang digunakan, kalimat ucapan dan tambahan lainnya bisa ditambahkan di catatan. '
            ],
            [
                'nama' => 'Bucket Snack',
                'foto' => '',
                'harga'=> 100000,
                'kategori' => 'Snack bebas',
                'estimasi_pembuatan' => '7 jam',
                'catatan' => 'Gratis kartu ucapan dan snack bisa memilih untuk warnanya. Untuk kalimat ucapan, pilihan snack dan tambahan lainnya bisa ditambahkan di catatan. '
            ],
        ];

        DB::table('barang')->insert($brg);
    }
}
