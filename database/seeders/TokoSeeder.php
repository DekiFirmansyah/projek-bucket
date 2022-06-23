<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toko')->insert([
            'user_id' => 1,
            'nama_toko' => 'DilDe Bucket',
            'alamat' => 'Jl. Soekarno Hatta No. 12 Malang',
            'email'=> 'dilde@gmail.com',
            'no_telp' => '081234098111'
        ]);
    }
}