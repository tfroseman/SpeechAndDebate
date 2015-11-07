<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentRoundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_rounds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');

            $table->string('code');
            $table->foreign('code')->references('code')->on('tournament_students');

            $table->integer('score');

            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournament');
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
        Schema::drop('tournament_rounds');
    }
}
