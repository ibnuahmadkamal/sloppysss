<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewfixTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviewfix', function (Blueprint $tablereviewfix) {
            $tablereviewfix->bigIncrements('id');
            $tablereviewfix->string('review');
            $tablereviewfix->rememberToken();
            $tablereviewfix->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviewfix');
    }
}
