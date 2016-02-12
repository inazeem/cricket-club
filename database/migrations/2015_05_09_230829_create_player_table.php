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
            $table->string('address1');
            $table->string('address2');
            $table->date('dob');
            $table->string('city');
            $table->string('postcode');
            $table->string('county');
            $table->integer('club_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('players', function($table) {
            $table->foreign('club_id')->references('id')->on('clubs');
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
