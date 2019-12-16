<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomestayfixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homestayfix', function (Blueprint $tablehmfix) {
            $tablehmfix->bigIncrements('id');
            $tablehmfix->string('name')->unique();
            $tablehmfix->string('alamat');
            $tablehmfix->string('deskripsi');
            $tablehmfix->string('fasilitas');
            $tablehmfix->string('tarif');
            $tablehmfix->string('gambar');
            $tablehmfix->rememberToken();
            $tablehmfix->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homestayfix');
    }
}
