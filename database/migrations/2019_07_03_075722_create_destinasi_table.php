<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinasi', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_paket');
            $table->string('nama_tempat_destinasi',255);
            $table->string('kota_destinasi',255);
            $table->string('gambar_destinasi',255);
            $table->timestamps();

            $table->foreign('id_paket')->references('id')->on('paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('destinasi');
    }
}
