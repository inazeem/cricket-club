<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayerTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('players', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->integer('club_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('players', function($table) {
            $table->foreign('club_id')->references('id')->on('clubs');
        });

        Schema::create('player_team', function(Blueprint $table) {

            $table->integer('player_id')->unsigned();
            $table->foreign('player_id')->references('id')->on('players')->onDelete('cascade');

            $table->integer('team_id')->unsigned();
            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

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
        Schema::drop('players');
        Schema::drop('player_team');
	}

}
