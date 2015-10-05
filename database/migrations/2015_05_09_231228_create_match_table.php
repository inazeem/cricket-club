<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('matches', function(Blueprint $table)
        {
            $table->increments('id');
            $table->date('date');
            $table->time('time');
            $table->string('opposition');
            $table->string('result');
            $table->integer('team_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('matches', function($table) {

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');

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
