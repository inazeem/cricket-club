<?php namespace App\Services;

use App\User;
use App\Club;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'club_name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$user =  User::create([
			'club_name' => $data['club_name'],
			'email' => $data['email'],
			'password' => bcrypt($data['password']),
		]);

		$club = new Club();

		$club->name = $data['club_name'];
		$club->user_id = $user->id;
		$club->save();

		return $user;
	}

}
