<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModelHsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('model_hs', function (Blueprint $tablehm) {
            $tablehm->bigIncrements('id');
            $tablehm->string('name')->unique();
            $tablehm->string('alamat');
            $tablehm->string('deskripsi');
            $tablehm->string('fasilitas');
            $tablehm->string('tarif');
            $tablehm->string('gambar');
            $tablehm->rememberToken();
            $tablehm->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('model_hs');
    }
}
