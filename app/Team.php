<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model {

	//

    public function clubs(){
        return $this->belongsToMany('App\Club');
    }

}
