<?php namespace App\Http\Controllers;
use App\Playerscore;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class PlayerscoreController extends Controller {

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
		$playerscores = Playerscore::all();
        return view('playerscores.index',compact('playerscores'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $players = \DB::table('players')->orderBy('firstname', 'asc')->lists('id','firstname');
		return view('playerscores.create',compact('players'));
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

        $playerscore = new Playerscore;
        $playerscore->runs_scored = $input['runs-scored'];
        $playerscore->not_out = $input['not-out'];
        $playerscore->balls_bowled = $input['balls-bowled'];
        $playerscore->wicket = $input['wickets'];
        $playerscore->runs_conceded = $input['runs-conceded'];
        $playerscore->catches = $input['catches'];
        $playerscore->stumpings = $input['stumpings'];
        $playerscore->player_id = $input['player_id'];

        $playerscore->save();

        return redirect('playerscores');
	}

    /**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$playerscore = Playerscore::findorfail($id);
        return view('playerscores.show',compact('playerscore'));
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
