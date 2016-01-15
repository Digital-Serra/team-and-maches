<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatisticsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistics', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matches')->unsigned();
            $table->integer('victories')->unsigned();
            $table->integer('draws')->unsigned();
            $table->integer('defeats')->unsigned();
            $table->integer('goals_scored')->unsigned();
            $table->integer('goals_conceded')->unsigned();
            $table->integer('yellow_cards')->unsigned();
            $table->integer('red_cards')->unsigned();
            $table->integer('harnessing')->unsigned();
            $table->integer('frequency')->unsigned();
            $table->integer('unrealized_matches')->unsigned();
            $table->integer('predicted_matches')->unsigned();
            $table->string('year');
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
        Schema::drop('statistics');
    }
}
