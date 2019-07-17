<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             typePaketTableSeeder::class,
             paketTableSeeder::class,
             destinasiTableSeeder::class,
             fasilitasTableSeeder::class,
             testimoniTableSeeder::class
             ]);
    }
}
