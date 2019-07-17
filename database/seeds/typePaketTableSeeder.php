<?php

use Illuminate\Database\Seeder;

class typePaketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_paket')->insert([
            [
                'type' => 'FAMILY TRIP',
            ],
            [
                'type' => 'CORPORATE TIP',
            ],
            [
                'type' => 'CUSTOM TRIP'
            ]
        ]);
    }
}
