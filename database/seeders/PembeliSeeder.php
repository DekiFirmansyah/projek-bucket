<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PembeliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pbl = [
            [
                'user_id' => 2,
                'nama' => 'Dilta Febiana',
                'jenis_kelamin' => 'P',
                'email'=> 'diltaDiana11@gmail.com',
                'alamat' => 'Jl. Sengkaling No. 12 Blimbing',
                'no_telp' => '087781236511',
                'foto' => ''
            ],
            [
                'user_id' => 3,
                'nama' => 'Deki Firmansyah',
                'jenis_kelamin' => 'L',
                'email'=> 'dekifirmansyah27@gmail.com',
                'alamat' => 'Griya Shanta 19 No. 282 Lowokwaru',
                'no_telp' => '081331386946',
                'foto' => ''
            ],
        ];

        DB::table('pembeli')->insert($pbl);
    }
}