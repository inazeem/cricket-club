<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamselectionTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teamselections', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('match_id')->unsigned();
            $table->integer('player_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('teamselections', function($table) {
            $table->foreign('player_id')->references('id')->on('players');
            $table->foreign('match_id')->references('id')->on('matches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('teamselections');
    }

}
