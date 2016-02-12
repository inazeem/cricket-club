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
            $table->rememberToken();
            $table->timestamps();
        });

		Schema::create('club_team', function(Blueprint $table) {
			$table->integer('club_id')->unsigned();
			$table->foreign('club_id')->references('id')->on('clubs')->onDelete('cascade');
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
        Schema::drop('teams');

	}

}
