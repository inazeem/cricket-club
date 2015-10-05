<?php namespace App\Http\Controllers;
use App\Team;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Carbon\Carbon;
use Illuminate\Http\Request;


class TeamController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$teams = Team::all();
        return view('teams.index',compact('teams'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('teams.create');
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

        $team = new Team;
        $team->name = $input['name'];
        $team->club_id = $input['club_id'];

        $team->save();

        return redirect('teams');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
        $team = Team::findorfail($id);
        return view('teams.show', compact('team'));
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