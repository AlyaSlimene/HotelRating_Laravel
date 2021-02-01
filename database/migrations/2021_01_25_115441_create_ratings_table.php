<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->integer('idHotel');
            $table->integer('idUser');
            $table->tinyInteger('noteAcc');
            $table->tinyInteger('noteRest');
            $table->tinyInteger('noteHyg');
            $table->tinyInteger('noteExtra');
            $table->String('description');
            $table->date('dateRating');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ratings');
    }
}
