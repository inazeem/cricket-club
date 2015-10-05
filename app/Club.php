<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model {

	//
    protected $fillable = [
        'Club_name',
        'Club_email',
        'Club_owner',
        'Club_password'
    ];
}
