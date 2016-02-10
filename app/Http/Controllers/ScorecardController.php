<?php namespace App\Http\Controllers;

use App\Scorecard;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ScorecardController extends Controller {

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
		$scorecards = Scorecard::all();
        return view('scorecards.index',compact('scorecards'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($matchid)
	{
		return view('scorecards.create',compact('matchid'));
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

        $scorecard = new Scorecard;
        $scorecard->runs_scored = $input['runs-scored'];
        $scorecard->over_bowled = $input['over-bowled'];
        $scorecard->leg_byes = $input['leg-byes'];
        $scorecard->wicket = $input['wickets'];
        $scorecard->byes = $input['byes'];
        $scorecard->wides = $input['wides'];
        $scorecard->no_balls = $input['no-balls'];
        $scorecard->match_id = $input['match_id'];

        $scorecard->save();

        return redirect('scorecards');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$scorecard = Scorecard::findorfail($id);
        return view('scorecards.show',compact('scorecard'));
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
