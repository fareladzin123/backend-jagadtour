<?php

use Illuminate\Database\Seeder;

class fasilitasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fasilitas')->insert([
            [
                'id_paket' => 1,
                'fasilitas' => 'Makan 2 Kali Gratis',
                'gambar_fasilitas' => 'dfea.jpg'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Free Wifi',
                'gambar_fasilitas' => 'mhjgyj.jpg'
            ],
            [
                'id_paket' => 1,
                'fasilitas' => 'Antar Jemput Stasiun',
                'gambar_fasilitas' => 'mhjgyjdcgs.jpg'
            ],
            [
                'id_paket' => 2,
                'fasilitas' => 'Free Wifi',
                'gambar_fasilitas' => 'mhasdjgyj.jpg'
            ],
            [
                'id_paket' => 2,
                'fasilitas' => 'Kendaraan Gratis',
                'gambar_fasilitas' => 'mhjgyjng.jpg'
            ]
        ]);
    }
}
