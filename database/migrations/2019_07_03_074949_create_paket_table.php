<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_type');
            $table->string('nama_paket',255);
            $table->string('durasi',255);
            $table->string('gambar_paket',255);
            $table->string('gambar_rencana',255);
            $table->integer('harga_dewasa');
            $table->integer('harga_anak');
            $table->timestamps();

            $table->foreign('id_type')->references('id')->on('type_paket');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket');
    }
}
