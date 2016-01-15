<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('team1_id')->unsigned();
            $table->foreign('team1_id')->references('id')->on('teams');
            $table->integer('team2_id')->unsigned();
            $table->foreign('team2_id')->references('id')->on('teams');
            $table->integer('team1_goals')->unsigned();
            $table->integer('team2_goals')->unsigned();
            $table->string('team_type');
            $table->string('city');
            $table->timestamp('date');
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
        Schema::drop('matches');
    }
}
