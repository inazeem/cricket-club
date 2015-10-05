<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('teams', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->integer('club_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('Teams', function($table) {
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
        Schema::drop('teams');

	}

}
