<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTournamentSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tournament_schools', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::table('tournament_schools',function($table){
            $table->integer('school_id')->unsigned();
            $table->foreign('school_id')->references('id')->on('schools');

            $table->integer('tournament_id')->unsigned();
            $table->foreign('tournament_id')->references('id')->on('tournaments');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
