<?php

use Illuminate\Database\Seeder;


class ClubTableSeeder extends Seeder{

    public function run(){

        DB::table('Clubs')->delete();

        $club = array(
            ['Club_name' => 'CACC', 'Club_email' => 'sarwar.naseem@gmail.com', 'Club_owner' => 'Naseem Sarwar', 'Club_password' => 'Pa55w0rd']
            );

        DB::table('Clubs')->insert($club);
    }
}