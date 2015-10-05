<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScorecardTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scorecards', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('runs_scored');
            $table->string('over_bowled');
            $table->string('leg_byes');
            $table->string('wicket');
            $table->string('byes');
            $table->string('wides');
            $table->string('no_balls');
            $table->integer('match_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('scorecards', function($table) {
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
        Schema::drop('scorecards');
    }

}

