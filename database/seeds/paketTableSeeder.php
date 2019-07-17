<?php

use Illuminate\Database\Seeder;

class paketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('paket')->insert([
            [
                'id_type' => 1,
                'nama_paket' => 'Malang Batu Tour',
                'durasi' => '7 Hari',
                'gambar_paket' => 'sadawdu.jpg',
                'gambar_rencana' => 'asdawdasd.jpg',
                'harga_dewasa' => 1500000,
                'harga_anak' => 1000000
            ],
            [
                'id_type' => 1,
                'nama_paket' => 'Bali Lombok Tour',
                'durasi' => '14 Hari',
                'gambar_paket' => 'mdjnsd.jpg',
                'gambar_rencana' => 'lijlilkm.jpg',
                'harga_dewasa' => 4500000,
                'harga_anak' => 3000000
            ]
        ]);
    }
}
