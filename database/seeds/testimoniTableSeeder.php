<?php

use Illuminate\Database\Seeder;

class testimoniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimoni')->insert([
            [
                'id_paket' => 1,
                'nama_testimoni' => 'Fareladzin Wibi Ramadhan',
                'kota_testimoni' => 'Jakarta',
                'testimoni' => 'asdaefsdvdrgxvaexcsfsdsfj sej fjsy  efejf sjeyfvs jef',
                'foto_testimoni' => 'fbsfsdf.jpg'
            ],
            [
                'id_paket' => 1,
                'nama_testimoni' => 'Liwa Alex',
                'kota_testimoni' => 'Ambon',
                'testimoni' => 'asdaefsdvdrgxvaexcsfsdsfj sej fjsy  efejf sjeyfvs jef',
                'foto_testimoni' => 'fgfgdefse.jpg'
            ],
            [
                'id_paket' => 2,
                'nama_testimoni' => 'Arya Annurseno',
                'kota_testimoni' => 'Jogjakarta',
                'testimoni' => 'asdaefsdvdrgxvaexcsfsdsfj sej fjsy  efejf sjeyfvs jef',
                'foto_testimoni' => 'fgfgdefs123.jpg'
            ]
        ]);
    }
}
