<?php

use Illuminate\Database\Seeder;

class destinasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasi')->insert([
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Alun-alun kota Malang',
                'kota_destinasi' => 'Malang',
                'gambar_destinasi' => 'dfvsef.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_tempat_destinasi' => 'Hawai Waterpark',
                'kota_destinasi' => 'Malang',
                'gambar_destinasi' => 'dfvjnd.jpg'
            ],
            [
                'id_paket' => 2,
                'nama_tempat_detinasi' => 'Pantai Pandawa',
                'kota_destinasi' => 'Bali',
                'gambar_destinasi' => 'mjknsce.jpg'
            ]
        ]);
    }
}
