<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clubs', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name');
            $table->string('owner');
            $table->string('secretory');
            $table->string('admin');
            $table->string('city');
            $table->string('postcode');
            $table->string('county');
            $table->string('address1');
            $table->string('address2');
            $table->integer('user_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('clubs', function($table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clubs');
    }

}