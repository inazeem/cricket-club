<?php namespace App\Http\Controllers;

use App\Player;
use App\Club;
use Auth;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

use Illuminate\Http\Request;

class PlayerController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$players = Player::all();
        return view('players.index',compact('players'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('players.create');
	}

    /**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input =  \Illuminate\Support\Facades\Request::all();
        $input['published_at'] = Carbon::now();
		$club = Club::where('user_id', '=', Auth::user()->id)->first();

        $player = new Player;
        $player->firstname 	= $input['firstname'];
        $player->lastname 	= $input['lastname'];
		$player->address1 	= $input['address1'];
		$player->address1 	= $input['address2'];
		$player->dob 		= $input['dob'];
		$player->city 		= $input['city'];
		$player->postcode	= $input['postcode'];
		$player->county		= $input['county'];
		$player->club_id 	= $club->id;

        $player->save();

        return redirect('players');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $player = Player::findorfail($id);
        return view('players.show', compact('player'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
