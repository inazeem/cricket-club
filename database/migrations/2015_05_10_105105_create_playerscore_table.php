<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerscoreTable extends Migration {

	/**
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_scores', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('runs_scored');
            $table->string('not_out');
            $table->string('balls_bowled');
            $table->string('wicket');
            $table->string('runs_conceded');
            $table->string('catches');
            $table->string('stumpings');
            $table->integer('player_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('player_scores', function($table) {
            $table->foreign('player_id')->references('id')->on('players');
        });

        Schema::create('match_playerscore', function(Blueprint $table) {

            $table->integer('match_id')->unsigned();
            $table->foreign('match_id')->references('id')->on('matches')->onDelete('cascade');

            $table->integer('scorecard_id')->unsigned();
            $table->foreign('scorecard_id')->references('id')->on('player_scores')->onDelete('cascade');

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
        Schema::drop('player_scores');
        Schema::drop('match_playerscore');
    }

}
